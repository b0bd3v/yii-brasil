<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/yii/css/main.css">



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a href=<?php echo $this->createUrl('site/index') ?> >Yii Brasil</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li> <a href="#">Artigos</a> </li>
				<li> <a href="#">Vídeos</a> </li>
				<li> <a href="#">Tutoriais</a> </li>
				<li> <a href="#">Notícias</a> </li>
			</ul>
		</div>
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
