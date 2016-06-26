<div class="title admin_t">Редактирование новости</div>
<div class="model_info_img">
	<div class="model_item_container">
		<div class="model_item">
				<img src="/img/news/thumbs/<?=$data['News']['img']?>">
		</div>
	</div>
</div>
<div class="model_info">
<?php 
echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата:',));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):', 'class' => 'admin_input_f model fl_r'));
?>
</div>
<?
echo $this->Form->end('Редактировать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>