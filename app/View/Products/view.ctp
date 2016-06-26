<div class="content">
	<div class="compani_item">
		<h1 class="title"><?=$data['Product']['title']?></h1>
		<div class="product_list_item" >
			<div class="product_img_first img fl_l">
				<img src="/img/product/thumbs/<?=$data['Product']['img']?>" alt="<?=$data['Product']['title']?>">
			</div>
			<div class="price_price">
				Цена: <div class="price"> <?=$data['Product']['price']?> </div>
			</div>
			<strong>Описание: </strong>
			<?=$data['Product']['body']?>
		</div>
	</div>
</div>