<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryParentId'); ?>
		<?php echo $form->textField($model,'CategoryParentId'); ?>
		<?php echo $form->error($model,'CategoryParentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryName'); ?>
		<?php echo $form->textField($model,'CategoryName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CategoryName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryStatus'); ?>
		<?php echo $form->textField($model,'CategoryStatus'); ?>
		<?php echo $form->error($model,'CategoryStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StoreSid'); ?>
		<?php echo $form->textField($model,'StoreSid',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'StoreSid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->