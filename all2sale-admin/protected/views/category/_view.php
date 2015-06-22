<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryParentId')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryParentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryName')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryStatus')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StoreSid')); ?>:</b>
	<?php echo CHtml::encode($data->StoreSid); ?>
	<br />


</div>