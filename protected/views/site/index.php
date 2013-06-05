<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/webwidget_slideshow_dot.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/webwidget_slideshow_dot.css');
Yii::app()->clientScript->registerScript('script', <<<JS
    $(function() {
        $("#webwidget_slideshow_dot").webwidget_slideshow_dot({
            slideshow_time_interval: '2000',
            slideshow_window_width: '610',
            slideshow_window_height: '350',
            soldeshow_foreColor: 'transparent',
            directory: '/howdygroup/images/scroll/'
        });
    });
JS
);
?>

<div class="grid_4 alpha">
    <h6 class="normalTitle">About Us</h6>
    <p><?php echo Yii::app()->name; ?> is a Houston based limited liability company, officially incorporated on May 3, 2013. Our services include: </p>
    <p><a href='<?php echo Yii::app()->request->baseUrl; ?>/index.php/whatwedo/admission' class='title_show'>Admission Consulting</a><br>
    <a href='<?php echo Yii::app()->request->baseUrl; ?>/index.php/whatwedo/training' class='title_show'>Digital Training</a><br>
    <a href='<?php echo Yii::app()->request->baseUrl; ?>/index.php/whatwedo/workshop' class='title_show'>Design Portfolio Workshop</a><br>
   <a href='<?php echo Yii::app()->request->baseUrl; ?>/index.php/whatwedo/consulting' class='title_show'> Planning & Design Consulting</a></p>    
</div>

<div id="webwidget_slideshow_dot" class="grid_8 omega">
    <ul>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/la_sketch/1.jpg" width="610px"/></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/la_sketch/2.jpg" width="610px"/></li>

        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/la_com_render/1.jpg" width="610px"/></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/la_com_render/2.jpg" width="610px"/></li>

        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/arch/1.jpg" width="610px"/></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/arch/2.jpg" width="610px"/></li>

        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/drawing/1.jpg" width="610px"/></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/drawing/2.jpg" width="610px"/></li>

        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/gis/1.jpg" width="610px"/></li>
        <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homepage/gis/2.jpg" width="610px"/></li>
    </ul>
</div>