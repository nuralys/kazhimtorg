<div class="title admin_t">
		<h3>Добавление слайда</h3>
	</div>
<?php 

echo $this->Form->create('Slide', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Описание', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
echo $this->Form->input('link', array('label' => 'Ссылка'));?>
<?php
echo $this->Form->end('Создать');
?>
</div>