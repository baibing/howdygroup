<?php
/* @var $this WorkshopUserInfoController */
/* @var $model WorkshopUserInfo */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Workshop Sign Up',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'workshop-user-info-workshopForm-form',
	'enableAjaxValidation'=>false,
)); ?>

    <legend class="normalTitle">Workshop Sign Up</legend>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portfolio'); ?>
                <?php echo $form->dropDownList($model,'portfolio',$model->portfolioOptions, array('empty' => 'Select Workshop')); ?>
		<?php echo $form->error($model,'portfolio'); ?>
	</div>
    
	<div class="signup button">
		<?php echo CHtml::submitButton('Submit', array('class'=>'signupButton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->