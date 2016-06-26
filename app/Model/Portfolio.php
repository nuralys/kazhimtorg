<?php

class Portfolio extends AppModel{
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите название'
		),
		
	);

	public function customUploadImg($file = array()){
		$i=1;
		debug($file);
		die();
		while($i<=1){
		if(!is_uploaded_file($file['pf'.$i]['tmp_name'])){
			return false;
		}
			$ext[$i] = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['pf'.$i]['name']));
			// debug($ext);
			$fileName[$i] = $this->genNameFile($ext[$i]);
			$path = WWW_ROOT . 'img/portfolio/' . $fileName[$i];
			$path_th = WWW_ROOT . 'img/portfolio/thumbs/' . $fileName[$i];
			if(!move_uploaded_file($file['pf'.$i]['tmp_name'], $path)){
				return false;
			}
			$this->resizeImg($path, $path_th, 400, 302, $ext[$i]);
			$this->data[$this->alias]['pf'.$i] = $fileName[$i];
			$i++;
		}
		
		return true;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'img/news/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}
	public function resizeImg($target, $dest, $wmax = 647, $hmax = 647, $ext){
		/*
		$target - путь к оригинальному файлу
		$dest - путь сохранения обработанного файла
		$wmax - максимальная ширина
		$hmax - максимальная высота
		$ext - расширение файла
		*/
		list($w_orig, $h_orig) = getimagesize($target);
		$ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

		if(($wmax / $hmax) > $ratio){
			$wmax = $hmax * $ratio;
		}else{
			$hmax = $wmax / $ratio;
		}
		
		$img = "";
		// imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
		switch($ext){
			case("gif"):
				$img = imagecreatefromgif($target);
				break;
			case("png"):
				$img = imagecreatefrompng($target);
				break;
			default:
				$img = imagecreatefromjpeg($target);    
		}
		$newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки
		
		if($ext == "png"){
			imagesavealpha($newImg, true); // сохранение альфа канала
			$transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
			imagefill($newImg, 0, 0, $transPng); // заливка  
		}
		
		imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
		switch($ext){
			case("gif"):
				imagegif($newImg, $dest);
				break;
			case("png"):
				imagepng($newImg, $dest);
				break;
			default:
				imagejpeg($newImg, $dest);    
		}
		imagedestroy($newImg);
	}
}