<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberSid'); ?>
		<?php echo $form->textField($model,'MemberSid',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MemberSid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberUsername'); ?>
		<?php echo $form->textField($model,'MemberUsername',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'MemberUsername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberEmail'); ?>
		<?php echo $form->textField($model,'MemberEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MemberEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberPassword'); ?>
		<?php echo $form->textField($model,'MemberPassword',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MemberPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberFbId'); ?>
		<?php echo $form->textField($model,'MemberFbId',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'MemberFbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Membertype'); ?>
		<?php echo $form->textField($model,'Membertype'); ?>
		<?php echo $form->error($model,'Membertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberDateRegister'); ?>
		<?php echo $form->textField($model,'MemberDateRegister'); ?>
		<?php echo $form->error($model,'MemberDateRegister'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberDateOnline'); ?>
		<?php echo $form->textField($model,'MemberDateOnline'); ?>
		<?php echo $form->error($model,'MemberDateOnline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberOK'); ?>
		<?php echo $form->textField($model,'MemberOK'); ?>
		<?php echo $form->error($model,'MemberOK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MemberStatus'); ?>
		<?php echo $form->textField($model,'MemberStatus'); ?>
		<?php echo $form->error($model,'MemberStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->