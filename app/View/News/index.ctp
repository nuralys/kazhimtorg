<div class="breadcrumb">
	<ul class="breadcrumb_list">
		<li><a href="/">Главная</a></li>
		<li>Новости</li>
	</ul>
</div>
<ul class="news_list">
<?php foreach($news as $item): ?>
	<li>
		<div class="news_item__img">
			<img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>">
		</div>
		<a href="/news/view/<?=$item['News']['id']?>" class="news_name"><?=$item['News']['title']?></a>
		<div class="date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>
	</li>
<?php endforeach ?>
</ul>