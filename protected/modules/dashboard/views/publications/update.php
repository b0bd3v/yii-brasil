<?php
$this->breadcrumbs=array(
	'Publications'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Publications','url'=>array('index')),
	array('label'=>'Create Publications','url'=>array('create')),
	array('label'=>'View Publications','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Publications','url'=>array('admin')),
);
?>

<h1>Update Publications <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>