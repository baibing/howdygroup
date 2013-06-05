<?php
/* @var $this AdmissionProgramController */
/* @var $model AdmissionProgram */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-program-programlink-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="sub_signup">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->dropDownList($model,'country',$model->countryOptions, array('empty' => 'Select Target Country')); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="sub_signup">
		<?php echo $form->labelEx($model,'sel_major'); ?>
		<?php echo $form->dropDownList($model,'sel_major',$model->majorOptions, array('empty' => 'Select Target Major')); ?>
		<?php echo $form->error($model,'sel_major'); ?>
	</div>

	<div class="sub_signup">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->dropDownList($model,'degree',$model->degreeOptions, array('empty' => 'Select Target Degree')); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="signup buttons">
		<?php echo CHtml::submitButton('View',array('class'=>'signupButton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->