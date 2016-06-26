<div class="breadcrumb">
	<ul class="breadcrumb_list">
		<li><a href="/">Главная</a></li>
		<li><a href="/news"> Новости </a></li>
		<li><?=$post['News']['title'] ?></li>
	</ul>
</div>
	<div class="side_bar">
		<div class="news_side_title">Остальные новости</div> 
			<ul class="news_side_list">
			<?php foreach($news as $item): ?>
				<li><div class="news_item__img">
					<img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>">
				</div>
				<a href="" class="news_name"><?=$item['News']['title']?></a>
				<div class="date"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></div></li>
			<?php endforeach ?>
			</ul>
		
	</div>
	<div class="content">
		<div class="news_titel_img">
			<div class="news_img_second">
				<img src="/img/news/<?=$post['News']['img'] ?>" alt="<?=$post['News']['title'] ?>">
			</div>
			<div class="title_min"><h1><?=$post['News']['title'] ?></h1></div>
			<div class="date"><?php echo $this->Time->format($post['News']['date'], '%d.%m.%Y', 'invalid'); ?></div>
		</div>
		<?=$post['News']['body'] ?>
<div class="reviews_bg">
<div id="hypercomments_widget"></div>
<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 67140});
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/67140/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
</div>
	</div>