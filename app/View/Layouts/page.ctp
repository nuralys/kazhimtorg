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
<link rel="stylesheet" type="text/css" href="/css/slide.css">
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
	<div class="container">
		<div class="cr">
			<?php echo $this->fetch('content'); ?>
		</div><!-- cr end -->
	</div>
	<?=$this->element('footer')?>	
</div>

</body>
</html>