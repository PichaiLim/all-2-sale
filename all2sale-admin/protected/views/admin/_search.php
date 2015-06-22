<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'Adminname', array('class'=>'label-control col-md-2')); ?>
		<div class="col-md-10">
			<?php echo $form->textField($model,'Adminname',array('size'=>60,'maxlength'=>200, 'class'=>'form-control'))
			; ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'AdminStatus', array('class'=>'label-control col-md-2')); ?>
		<div class="col-md-10">
			<?php echo $form->textField($model,'AdminStatus', array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class=form-group">
		<div class="col-md-offset-2">
			<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-info')); ?> .
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->