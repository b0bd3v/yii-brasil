<div class="row">
	<div class="col-md-9">
		<div class="row">
			<div class="jumbotron">
			  <div class="container">
			    <h1><?php echo Yii::t('app', 'Download')?></h1>
			    <p><?php echo Yii::t('app', 'Baixe a última versão.')?></p>
			    <p><a class="btn btn-primary btn-lg"><?php echo Yii::t('app', 'Download Yii')?></a></p>
			  </div>
			</div>
		</div>
		
		<div class="col-md-8">
			<h2>Blog</h2>
			<ul class="media-list">
				<li class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="<?php echo Yii::app()->baseUrl; ?>/img/dummy-video-thumb.jpg" alt="video">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Assunto sobre Yii</h4>
						Vivamus tincidunt diam lectus turpis. Vivamus turpis. Vivamus tincidunt diam lectus turpis.
					</div>
				</li>
				<li class="media">
					<div class="media-body">
						<h4 class="media-heading">Evento agendado</h4>
						Vivamus tincidunt diam lectus turpis, sed tincidunt orci. Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
					</div>
				</li>
				<li class="media">
					<div class="media-body">
						<h4 class="media-heading">Novidades Yii</h4>
						Vivamus tincidunt diam lectus turpis, sed tincidunt orci. Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
					</div>
				</li>
			</ul>
			<button type="link" class="pull-right btn btn-default btn-sm"><?php echo Yii::t('app', 'Acessar blog')?></button>  
		</div>
		<div class="col-md-4">
			<h2>Notícias</h2>
			<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="<?php echo Yii::app()->baseUrl; ?>/img/dummy-video-thumb.jpg" alt="video">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Notícia sobre Yii</h4>
							Vivamus tincidunt diam lectus turpis.
						</div>
					</li>
					<li class="media">
						<div class="media-body">
							<h4 class="media-heading">Evento agendado</h4>
							Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
						</div>
					</li>
					<li class="media">
						<div class="media-body">
							<h4 class="media-heading">Novidades Yii</h4>
							Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
						</div>
					</li>
				</ul>
			<button type="link" class="pull-right btn btn-default btn-sm"><?php echo Yii::t('app', 'Acessar notícias')?></button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="list-group">
			<a class="list-group-item">Learn more</a>
			<a class="list-group-item">Learn more</a>
			<a class="list-group-item">Learn more</a>
			<a class="list-group-item">Learn more</a>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading"><?php echo Yii::t('app', 'Vídeos')?></div>
			<div class="panel-body">
				
				<ul class="media-list">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="<?php echo Yii::app()->baseUrl; ?>/img/dummy-video-thumb.jpg" alt="video">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Construindo um blog com Yii</h4>
							Vivamus tincidunt diam lectus turpis.
						</div>
					</li>
					<li class="media">
						<div class="media-body">
							<h4 class="media-heading">Construindo um blog com Yii</h4>
							Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
						</div>
					</li>
					<li class="media">
						<div class="media-body">
							<h4 class="media-heading">Construindo um blog com Yii</h4>
							Vivamus tincidunt diam lectus turpis, sed tincidunt orci.
						</div>
					</li>
				</ul>
				
				<button type="link" class="pull-right btn btn-default btn-sm"><?php echo Yii::t('app', 'Todos vídeos')?></button>				
			</div>
		</div>
	</div>
	
</div>
