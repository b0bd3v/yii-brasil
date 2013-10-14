<?php
$this->breadcrumbs=array(
	'Publication Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PublicationCategories','url'=>array('index')),
	array('label'=>'Create PublicationCategories','url'=>array('create')),
	array('label'=>'View PublicationCategories','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PublicationCategories','url'=>array('admin')),
);
?>

<h1>Update PublicationCategories <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>