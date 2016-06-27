<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<?php if(isset($meta['keywords'])): ?>
	<meta name="keywords" content="<?=$meta['keywords']?>">
<?php endif; ?>
<?php if(isset($meta['description'])): ?>
	<meta name="description" content="<?=$meta['description']?>">
<?php endif; ?>
<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
<link href="/css/reset.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="/js/app.js" type="text/javascript"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" media="Screen" href="css/main-ie6.css">
<script type="text/javascript" src="/js/ie6-fix.js"></script>
<![endif]-->
</head>
<body>
	<div class="page">
		<?=$this->element('header')?>
		<div class="cr">
			<div class="container">
				
				<?php echo $this->fetch('content'); ?>
				<div class="side_bar">
					<h2 class="title">
						Каталог
					</h2>
					<ul class="side_bar_list">
						<?=$sidebar ?>
					</ul>
				</div>
			</div><!-- end container -->
		</div>
	</div>
	<?=$this->element('footer')?>	
	<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
		<div class="logo"><img src="img/logo.png" alt=""></div>
	<div class="title_z">Заказ товара</div>

        <form method="POST" name="form1" action="form.php" >
			<input    maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Фио*"/>
			<input   maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Номер*"/>
			<input   maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Почта*"/>
			
			<button type="submit"  name="submit1" >Отправить</button>
			<div class="form_container"></div>
		</form>
	</div>
	<div id="overlay"></div>
	<div class="basket"></div>
	<script src="/js/custom-file-input.js"></script>
	<script src="/js/basket.js" type="text/javascript"></script>
</body>
</html>