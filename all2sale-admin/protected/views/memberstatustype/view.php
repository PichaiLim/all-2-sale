<?php
/* @var $this MemberstatustypeController */
/* @var $model Memberstatustype */

$this->breadcrumbs=array(
	'Memberstatustypes'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Memberstatustype', 'url'=>array('index')),
	array('label'=>'Create Memberstatustype', 'url'=>array('create')),
	array('label'=>'Update Memberstatustype', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Memberstatustype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Memberstatustype', 'url'=>array('admin')),
);
?>

<h1>View Memberstatustype #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'StatusName',
	),
)); ?>
