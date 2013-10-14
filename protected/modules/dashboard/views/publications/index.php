<?php
$this->breadcrumbs=array(
	'Publications',
);

$this->menu=array(
	array('label'=>'Create Publications','url'=>array('create')),
	array('label'=>'Manage Publications','url'=>array('admin')),
);
?>

<h1>Publications</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
