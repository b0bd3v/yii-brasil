<?php
$this->breadcrumbs=array(
	'Publications',
);
?>

<h1>Publications</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
	$this->menu=array(
	array('label'=>'Create Publications','url'=>array('create')),
	array('label'=>'Manage Publications','url'=>array('admin')),
);
?>
