<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publicationDate')); ?>:</b>
	<?php echo CHtml::encode($data->publicationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publicationCategoryId')); ?>:</b>
	<?php echo CHtml::encode($data->publicationCategoryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowComments')); ?>:</b>
	<?php echo CHtml::encode($data->allowComments); ?>
	<br />


</div>