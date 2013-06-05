<?php
/* @var $this TrainingUserInfoController */
/* @var $model TrainingUserInfo */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Training Sign Up',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'training-user-info-signup_training-form',
	'enableAjaxValidation'=>false,
)); ?>

    <legend class="normalTitle">Training Sign Up</legend>

	<?php echo $form->errorSummary($model); ?>

	<div class="signup">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="signup">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="signup">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'arcgis'); ?>
		<?php echo $form->labelEx($model,'arcgis',array('style'=>'display:inline;')); ?>
            <br>
		<?php echo $form->checkBox($model,'dsmax'); ?>
		<?php echo $form->labelEx($model,'dsmax',array('style'=>'display:inline;')); ?>
            <br>
		<?php echo $form->checkBox($model,'revit'); ?>
		<?php echo $form->labelEx($model,'revit',array('style'=>'display:inline;')); ?>
            <br>
		<?php echo $form->checkBox($model,'adobe'); ?>
		<?php echo $form->labelEx($model,'adobe',array('style'=>'display:inline;')); ?>
            <br>
		<?php echo $form->checkBox($model,'rhino_grass'); ?>
		<?php echo $form->labelEx($model,'rhino_grass',array('style'=>'display:inline;')); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array('class'=>'signupButton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->