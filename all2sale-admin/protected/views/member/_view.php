<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberSid')); ?>:</b>
	<?php echo CHtml::encode($data->MemberSid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberUsername')); ?>:</b>
	<?php echo CHtml::encode($data->MemberUsername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberEmail')); ?>:</b>
	<?php echo CHtml::encode($data->MemberEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberPassword')); ?>:</b>
	<?php echo CHtml::encode($data->MemberPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberFbId')); ?>:</b>
	<?php echo CHtml::encode($data->MemberFbId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Membertype')); ?>:</b>
	<?php echo CHtml::encode($data->Membertype); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberDateRegister')); ?>:</b>
	<?php echo CHtml::encode($data->MemberDateRegister); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberDateOnline')); ?>:</b>
	<?php echo CHtml::encode($data->MemberDateOnline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberOK')); ?>:</b>
	<?php echo CHtml::encode($data->MemberOK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberStatus')); ?>:</b>
	<?php echo CHtml::encode($data->MemberStatus); ?>
	<br />

	*/ ?>

</div>