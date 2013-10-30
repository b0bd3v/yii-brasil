<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>

<div class="col-md-2">
	<div id="sidebar">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href= <?php echo $this->createUrl('default/index') ?> > Home </a></li>
			<li><a href= <?php echo $this->createUrl('publications/index') ?> > Publicações </a></li>
			<li><a href= <?php echo $this->createUrl('publicationcategories/index') ?> > Categorias </a></li>
			<li><a href= <?php echo $this->createUrl('users/index') ?> > Usuários </a></li>
		</ul>
	</div><!-- sidebar -->
</div>
<div class="col-md-6">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<div class="col-md-4">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>