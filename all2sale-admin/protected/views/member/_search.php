<?php
/* @var $this MemberController */
/* @var $model Member */
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
		<?php echo $form->label($model,'MemberSid'); ?>
		<?php echo $form->textField($model,'MemberSid',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberUsername'); ?>
		<?php echo $form->textField($model,'MemberUsername',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberEmail'); ?>
		<?php echo $form->textField($model,'MemberEmail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberPassword'); ?>
		<?php echo $form->textField($model,'MemberPassword',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberFbId'); ?>
		<?php echo $form->textField($model,'MemberFbId',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Membertype'); ?>
		<?php echo $form->textField($model,'Membertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberDateRegister'); ?>
		<?php echo $form->textField($model,'MemberDateRegister'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberDateOnline'); ?>
		<?php echo $form->textField($model,'MemberDateOnline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberOK'); ?>
		<?php echo $form->textField($model,'MemberOK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MemberStatus'); ?>
		<?php echo $form->textField($model,'MemberStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->