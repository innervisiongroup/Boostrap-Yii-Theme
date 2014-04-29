<?php $this->beginContent('//layouts/main'); ?>
      <div class="row">
        <div class="col-md-3">
         <?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'sidebar list-unstyled'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar span3 -->

	<div class="col-md-9">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
