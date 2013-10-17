<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

	<?php
		$assetUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.lib.bootstrap'));
		Yii::app()->clientScript->registerCssFile($assetUrl . '/dist/css/bootstrap.css');
		Yii::app()->clientScript->registerScriptFile($assetUrl . '/dist/js/bootstrap.min.js');
		
		
		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile($baseUrl.'/css/main.css');		  
		 
	?>
	<link rel="stylesheet" href="/yii/css/main.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo Yii::app()->getHomeUrl(); ?>">Yii Brasil</a>
		</div>
		<div class="collapse navbar-ex1-collapselapse navbar-ex1-collapse">
	</div>
</nav>
<div class="container" id="main_container">
	<?php echo $content; ?>
</div>

<footer>
	<div class="container">Yii Brasil - <?php echo date('Y'); ?></div>
</footer>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</html>
