<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/960/960.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/960/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/960/text.css" media="all" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/howdygroup.css" />
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container_12" id="page">

	<div id="header" class="grid_3">
            <div id="logo">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" width="200" height="80" title="Go To Home Page"/></a><?php // echo CHtml::encode(Yii::app()->name); ?>
            </div>
	</div><!-- header -->
        
	<div id="mainmenu" class="grid_9" height="80">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                                array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'What We Do', 'url'=>array('/site/whatwedo'), 'active'=>$this->id=='whatwedo'?true:false),
				array('label'=>'Who We Are', 'url'=>array('/site/people')),
                                array('label'=>'Where We Are', 'url'=>array('/site/location')),
                                array('label'=>'Contact Us', 'url'=>array('/site/contact')),
                                array('label'=>'Career', 'url'=>array('/site/career')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
        <div class="clear"></div>
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        
        <?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="grid_12">
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo Yii::app()->name; ?>, LLC.
		All Rights Reserved.<br/>
	</div><!-- footer -->

	<div class="clear"></div>

</div><!-- page -->

</body>
</html>
