<?php
$this->breadcrumbs=array(
	'Publication Categories',
);

$this->menu=array(
	array('label'=>'Create PublicationCategories','url'=>array('create')),
	array('label'=>'Manage PublicationCategories','url'=>array('admin')),
);
?>

<h1>Publication Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
