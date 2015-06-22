<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div class="col-md-12">
		<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'breadcrumb'),
			));
		?>
	</div>
<!--	<div class="col-md-12">-->
<!--		<div id="sidebar">-->
<!--			--><?php
//				$this->beginWidget('zii.widgets.CPortlet', array(
//					'title'=>'Operations',
//				));
//				$this->endWidget();
//			?>
<!--		</div><!-- sidebar -->
<!--	</div>-->
	<div class="col-md-12">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
<?php $this->endContent(); ?>