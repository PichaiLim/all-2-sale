<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoryParentId'); ?>
		<?php echo $form->textField($model,'CategoryParentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoryName'); ?>
		<?php echo $form->textField($model,'CategoryName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoryStatus'); ?>
		<?php echo $form->textField($model,'CategoryStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StoreSid'); ?>
		<?php echo $form->textField($model,'StoreSid',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->