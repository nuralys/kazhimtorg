<div class="content">
	<div class="compani_item">
		<h1 class="title"><?=$data['Product']['title']?></h1>
		<div class="product_list_item" >
			<div class="product_img_first img fl_l">
				<img src="/img/product/thumbs/<?=$data['Product']['img']?>" alt="<?=$data['Product']['title']?>">
			</div>
				<div class="product_title display_none"><?=$data['Product']['title']?></div>
			<div class="price_price">
				Цена: <div class="price"> <?=$data['Product']['price']?> </div>
			</div>
			<div class="priduct">
			<div class="product_des">
				<strong>Описание: </strong>
				<?=$data['Product']['body']?>
			</div>
			<a href="/products/view/<?=$data['Product']['id']?>" class="button fl_l" >Назад</a>
			<div class="col_vid">
				<div class="number ">
				    <span class="minus">-</span>
				    <div class='item_count'/>1</div>
				    <span class="plus">+</span>
				</div>
				<div class="vid_container">
                	<div class="item_vid_count"><div class="item_vid">шт.</div></div>
					<div class="item_vid_list">
						<div class="item_vid_list_item">
							кг.
						</div>
					</div>
				</div>
		    </div>
			<button  class="button add_item fl_r" data-id="<?=$data['Product']['id']?>">В корзину</button>
			</div>
		</div>
	</div>
</div>