<?php
$this->breadcrumbs=array(
	'Publications'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Publications','url'=>array('index')),
	array('label'=>'Create Publications','url'=>array('create')),
	array('label'=>'Update Publications','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Publications','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Publications','url'=>array('admin')),
);
?>

<h1>View Publications #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'publicationDate',
		'publicationCategoryId',
		'userId',
		'title',
		'content',
		'allowComments',
	),
)); ?>
