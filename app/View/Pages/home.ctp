<div class="content">
	<div class="compani_item">
		<h2 class="title">
			Наша компания
		</h2>
		<div class="img fl_l">
			<img src="/img/compani.jpg" alt="">
		</div>
		<div class="min_title">
			Рады вас приветствовать на интернет ресурсе нашей компании!
		</div>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		<a href="" class="button fl_r">Подробнее</a>
	</div>
	<h2 class="title">
		Отрасли
	</h2>
	<div class="otrasli">
	<?php foreach($categories as $item): ?>
		<div class="otrasli_item">
			<div class="service_img">
				<a href="/category/<?=$item['Category']['id']?>"><img src="/img/category/thumbs/<?=$item['Category']['img']?>" alt="<?=$item['Category']['title']?>"></a>
			</div>
			<a href="/category/<?=$item['Category']['id']?>" class="otrasli__link">
				<?=$item['Category']['title']?>
			</a>
		</div>
		<?php endforeach ?>
	</div>
	<h2 class="title">
			Новости и Акции
	</h2>
	<div class="news-list">
		<?php foreach($stocks as $item): ?>
		<div class="news_list-item">
			<div class="news_item">
				<div class="news_item_img">
					<img src="/img/stock/thumbs/<?=$item['Stock']['img'] ?>" alt="<?=$item['Stock']['title'] ?>" ></div>
				<a href="" class="news_item__link"><?=$item['Stock']['title'] ?></a>
<!-- 				<p class="news_item_descrip">
					Lorem Ipsum is simply dummy text of the printing and...
				</p>
 -->				<a href="/stocks/view/<?=$item['Stock']['id'] ?>" class="more fl_r mr_top">Подробнее</a>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<h2 class="title">
		Сертификаты
	</h2>
		<div class="sertificats">
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"  rel="gallery"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"  rel="gallery"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
			<div class="sertificat_list-item">
				<div class="news_item">
					<div class="news_item_img">
						<a href="/img/sertificat.jpg" class="fancybox"><img src="/img/sertificat.jpg" alt="" ></a>
					</div>
				</div>
			</div>
		
	</div>
</div>