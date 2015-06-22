<?php
/* @var $this MemberstatustypeController */
/* @var $model Memberstatustype */

$this->breadcrumbs=array(
	'Memberstatustypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Memberstatustype', 'url'=>array('index')),
	array('label'=>'Manage Memberstatustype', 'url'=>array('admin')),
);
?>

<h1>Create Memberstatustype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>