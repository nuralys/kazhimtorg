<div class="breadcrumb">
	<ul class="breadcrumb_list">
		<li><a href="/">Главная</a></li>
		<li>Партнеры</li>
	</ul>
</div>
	
<ul class="client_list">
<?php foreach($data as $item): ?>
	<li>
		<div class="news_item__img">
			<img src="img/partner/thumbs/<?=$item['Partner']['img']?>" alt="<?=$item['Partner']['title']?>">
		</div>
		<div class="client_name">
			<?=$item['Partner']['title']?>
		</div>
		<a href="/partners/view/<?=$item['Partner']['id']?>" class="read_more">Подробнее</a>
	</li>
<?php endforeach ?>
</ul>