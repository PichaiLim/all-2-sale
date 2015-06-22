<?php
/* @var $this MemberstatustypeController */
/* @var $model Memberstatustype */

$this->breadcrumbs=array(
	'Memberstatustypes'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Memberstatustype', 'url'=>array('index')),
	array('label'=>'Create Memberstatustype', 'url'=>array('create')),
	array('label'=>'View Memberstatustype', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Memberstatustype', 'url'=>array('admin')),
);
?>

<h1>Update Memberstatustype <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>