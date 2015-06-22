<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel = "stylesheet" href = "<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.css"/>
	<link rel = "stylesheet" href = "<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.css"/>
	<link rel = "stylesheet" href = "<?php echo Yii::app()->request->baseUrl; ?>/css/Site.css">

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jscript/jquery-1.11.3.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jscript/jquery_lazyload-master/jquery.lazyload.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/jscript/holderjs/holder.js"></script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid">

	<!--header nav-->
	<div class="row">
		<?php include_once 'NavBarTop.php'; ?>
	</div>

	<div class = "row">
		<div class = "col-md-3">
			<?php include_once 'NavBarLeft.php'; ?>
		</div>
		<div class = "col-md-9">
<!--			--><?php //if(isset($this->breadcrumbs)):?>
<!--					--><?php //$this->widget('zii.widgets.cbreadcrumbs', array(
//							'links'=>$this->breadcrumbs,
//						)); ?><!--<!-- breadcrumbs -->
<!--				--><?php //endif?>
			<?php echo $content; ?>
		</div>
	</div>

</div>

</body>
</html>
