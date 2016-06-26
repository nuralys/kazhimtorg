 <?php if(!empty($data)): ?>
<div class="content">
	<ul class="breadcrums">
		<li><a href="/">Главная</a></li>
		<li>СТРАНЫ</li>
	</ul>
	<div class="title">
		<h1>СТРАНЫ</h1>
	</div>
	<ul class="strani">
	<?php foreach($data as $item): ?>
		<li>
			<div class="strani_img">
				<img src="/img/product/thumbs/<?=$item['Product']['img']?>" alt="<?=$item['Product']['title']?>">
			</div>
			<div class="name"><?=$item['Product']['title']?></div>
			<!-- <div class="starna">Страна: Южная Корея</div> -->
			<div class="des">
				<?=$item['Product']['body']?>
			</div>
			<a href="/products/view/<?=$item['Product']['id']?>"><div class="button stran_more"><span>ПОДРОБНЕЕ</span></div></a>
		</li>
	<?php endforeach ?>	
	</ul>
</div>
<?php else: ?>
<p>К сожалению информация еще не добавлена...</p>
<?php endif ?>