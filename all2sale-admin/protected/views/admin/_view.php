<?php
/* @var $this AdminController */
/* @var $data Admin */
?>


<di class="dl-horizontal">
	<dt><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</dt>
	<dd><?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?></dd>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('Adminname')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->Adminname); ?></dd>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('AdminPassword')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->AdminPassword); ?></dd>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('AdminLog')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->AdminLog); ?></dd>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('AdminStatus')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->AdminStatus); ?></dd>
</di>

