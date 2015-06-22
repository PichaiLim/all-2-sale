<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="alert alert-warning">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>


		<div class = "col-md-6">
			<div class="form-group">
				<?php echo $form->labelEx($model,'Adminname', array('class'=>'label-control col-md-4')); ?>
				<div class="col-md-8">
				<?php echo $form->textField($model,'Adminname',array('size'=>60,'maxlength'=>200,
																	 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'Adminname', array('class'=>'text text-danger')); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'AdminPassword', array('class'=>'label-control col-md-4')); ?>
				<div class="col-md-8">
					<?php echo $form->textField($model,'AdminPassword',array('size'=>10,'maxlength'=>10,
																			 'class'=>'form-control')); ?>
					<?php echo $form->error($model,'AdminPassword', array('class'=>'text text-danger')); ?>
				</div>
			</div>
		</div>

		<div class = "col-md-6">
			<div class="form-group">
				<?php echo $form->labelEx($model,'AdminLog', array('class'=>'label-control col-md-4')); ?>
				<div class="col-md-8">
					<?php echo $form->dateField($model,'AdminLog', array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'AdminLog', array('class'=>'text text-danger')); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'AdminStatus', array('class'=>'label-control col-md-4')); ?>
				<div class="col-md-8">
					<?php echo $form->textField($model,'AdminStatus', array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'AdminStatus', array('class'=>'text text-danger')); ?>
				</div>
			</div>
		</div>


	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->