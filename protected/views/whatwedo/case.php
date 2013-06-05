<?php
/* @var $model SuccessfulCase */
/* @var $links Links got from Database */
/* @var $status 1 - list of universities; 2 - list of successful cases */

Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/howdygroup.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/dg-picture-zoom.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/external/mootools-1.2.4-core-yc.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/external/mootools-more.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/dg-picture-zoom.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/dg-picture-zoom-autoload.js');

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Successful Cases',
);
?>

<?php
if ($status == 1) {
    if ($model->country == 'us') {
        $country = 'U.S.';
    } elseif ($model->country == 'uk') {
        $country = 'U.K.';
    } elseif ($model->country == 'ca') {
        $country = 'Canada';
    }
    echo '<h6 class="normalTitle">'.$country.' Successful Cases</h6>';   
    if (empty($links)) {
        echo 'No University Result Found. Please change the query and search again or contact us directly.';
    } else {
        echo '<p>The clients we had helped with were admitted to the following universities(A-Z). Click university name to view admission letters.</p>';
        $university = "";
        foreach ($links as $link) {
            if ($university != $link->university) {
                $university = $link->university;
                echo '<div>'."\n";
                echo '<a href="'.Yii::app()->baseUrl.'/index.php/whatwedo/case/university/'.$university.'" target="_blank" class="newTabLink">'.$university."</a>\n";
                echo '</div>'."\n";
            }
        }
    }
} elseif ($status == 2) {
    if (empty($links)) {
        echo 'No Successful Case Result Found. Please change the query and search again or contact us directly.';
    } else {
        echo '<p>'.$model->university.'</p>';
        foreach ($links as $link) {
            $url = $link->url;
            echo '<div>'."\n";
            echo '<img src="'.$url.'?url='.$url.'" class="dg-picture-zoom"/>'."\n";
//            echo '<a href="'.$url.'" target="_blank"><img src="'.$url.'" class="case_img"/></a>'."\n";
            echo '</div>'."\n";
        }
    }
}

?>