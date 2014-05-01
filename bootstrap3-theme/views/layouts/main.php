<?php
	Yii::app()->clientscript
		// use it when you need it!
		/*
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> <!-- Our bootstrap CSS -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- Always helpful... -->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" /> <!-- Custom style -->

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> <!-- Our bootstrap JS -->

<!-- Le fav and touch icons -->
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo Yii::app()->name ?></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
					'activeCssClass'	=> 'active',
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
				
			</div><!--/.nav-collapse -->
		</div>
	</div>
	
	<div class="cont">
		<div class="container-fluid">
		  <?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					'homeLink'=>false,
					'tagName'=>'ul',
					'separator'=>'',
					'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
					'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
					'htmlOptions'=>array ('class'=>'breadcrumb')
				)); ?>
			<!-- breadcrumbs -->
		  <?php endif?>
		
		<?php echo $content ?>
		
		
		</div><!--/.fluid-container-->
	</div>
	
	<section class="extra">
	  	<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Heading 1</h4>
					<ul>
						<li><a href="#">Subheading 1.1</a></li>
						<li><a href="#">Subheading 1.2</a></li>
						<li><a href="#">Subheading 1.3</a></li>
						<li><a href="#">Subheading 1.4</a></li>
					</ul>
				</div>
				
				<div class="col-md-3">
					<h4>Heading 2</h4>
					<ul>
						<li><a href="#">Subheading 2.1</a></li>
						<li><a href="#">Subheading 2.2</a></li>
						<li><a href="#">Subheading 2.3</a></li>
						<li><a href="#">Subheading 2.4</a></li>
					</ul>
				</div>
				
				<div class="col-md-3">
					<h4>Heading 3</h4>	
					<ul>
						<li><a href="#">Subheading 3.1</a></li>
						<li><a href="#">Subheading 3.2</a></li>
						<li><a href="#">Subheading 3.3</a></li>
						<li><a href="#">Subheading 3.4</a></li>
					</ul>
				</div>
				
				<div class="col-md-3">
					<h4>Heading 4</h4>
					<ul>
						<li><a href="#">Subheading 4.1</a></li>
						<li><a href="#">Subheading 4.2</a></li>
						<li><a href="#">Subheading 4.3</a></li>
						<li><a href="#">Subheading 4.4</a></li>
					</ul>
				</div>
			</div> <!-- /row -->
		</div> <!-- /container -->
	</section>
	
	<footer>
		<div class="footer">
		    <div class="container">
			    <div class="row">
					<div id="footer-copyright" class="col-md-6">
						About us | Contact us | Terms & Conditions
					</div> <!-- /span6 -->
					<div id="footer-terms" class="col-md-6">
						© <?php echo date('Y'); ?> Blac Bootstrap 3. Made by <a href="http://innervisiongroup.com/" target="_blank">Inner Vision Group</a>
					</div> <!-- /.span6 -->
			 	</div> <!-- /row -->
			</div> <!-- /container -->
		</div>
	</footer>
</body>
</html>
