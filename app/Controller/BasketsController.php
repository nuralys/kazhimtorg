<?php

class BasketsController extends AppController{

	public function index(){
		
		$title_for_layout = 'Корзина';
		
		$data = $this->Basket->find('all');
		// debug($news);
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Basket->find('all', array(
			'order' => array('date' => 'desc')
		));
		
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Basket->create();
			$data = $this->request->data['Basket'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Basket->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Basket->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Basket->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Basket->id = $id;
			$data1 = $this->request->data['Basket'];
			if(empty($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Basket->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Basket->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Basket->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	


	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Basket->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Basket->findById($id);
		$news = $this->Basket->find('all', array(
			'fields' => array('id', 'title', 'img', 'date'),
			'conditions' => array('id !=' => $id)
			));

		$this->set(compact('data', 'news'));
	}

	
}