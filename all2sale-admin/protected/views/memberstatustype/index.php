<?php
/* @var $this MemberstatustypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Memberstatustypes',
);

$this->menu=array(
	array('label'=>'Create Memberstatustype', 'url'=>array('create')),
	array('label'=>'Manage Memberstatustype', 'url'=>array('admin')),
);
?>

<h1>Memberstatustypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
