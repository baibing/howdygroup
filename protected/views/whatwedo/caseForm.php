<?php
/* @var $this SuccessfulCaseController */
/* @var $model SuccessfulCase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'successful-case-case-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->dropDownList($model,'country',$model->countryOptions, array('empty' => 'Select Country')); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="signup buttons">
		<?php echo CHtml::submitButton('View',array('class'=>'signupButton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->