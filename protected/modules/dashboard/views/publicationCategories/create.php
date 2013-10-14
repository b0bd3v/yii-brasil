<?php
$this->breadcrumbs=array(
	'Publication Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PublicationCategories','url'=>array('index')),
	array('label'=>'Manage PublicationCategories','url'=>array('admin')),
);
?>

<h1>Create PublicationCategories</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>