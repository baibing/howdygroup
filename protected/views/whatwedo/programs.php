<?php
/* @var $model AdmissionProgram */
/* @var $links Links got from Database */
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl.'/js/howdygroup.js');

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Programs',
);
?>

<h6 class="normalTitle">Program Information</h6>
<?php
if (empty($links)) {
    echo 'No University Program Result Found. Please change the query and search again or contact us directly.';
} else {
    $degree = $model->degree=='master'? "Master's":"Ph.D.";
    $str = '<p>The following is a list of '.$model->country.' universities with ';
    if ($model->country == 'us' || $model->country == 'ca') {
        if ($model->degree == 'master') {
            if ($model->sel_major == 'Urban Planning' || $model->sel_major == 'Architecture' || $model->sel_major == 'Landscape Architecture') {
                $str .= 'accredited ';
            }
        }
    }
    $str .= $model->sel_major.' '.$degree.' program. Click university name to view program information.</p>';
    echo $str;
    $name = "";
    
    foreach ($links as $link) {
        if ($name != $link->name) {
            $name = $link->name;
            echo '<div>'."\n";
            echo '<a class="title_show">'.$link->name."</a>\n";
            echo '<p class="sublist_hide">'.$link->department."<br>\n";
        }
        echo $link->major."<br>\n";
        echo '<a href="'.$link->link.'" target="_blank" class="newTabLink">Click here to view the program website</a><br>'."\n";
    }
}

?>