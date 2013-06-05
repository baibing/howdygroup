<?php
/* @var $this AdmissionVipController */
/* @var $model AdmissionVip */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Schools & Programs Tour Sign Up',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-vip-vip-form',
	'enableAjaxValidation'=>false,
)); ?>

        <fieldset class="actionForm">
          <legend class="normalTitle">Schools & Programs Tour Sign Up</legend>

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

            <div class="signup">
                    <?php echo $form->labelEx($model,'university'); ?>
                    <?php echo $form->textField($model,'university'); ?>
                    <?php echo $form->error($model,'university'); ?>
            </div>

            <div class="signup">
                    <?php echo $form->labelEx($model,'major'); ?>
                    <?php echo $form->textField($model,'major'); ?>
                    <?php echo $form->error($model,'major'); ?>
            </div>
        </fieldset>

        <fieldset class="actionForm">
            <div class="signup">
                    <?php echo $form->labelEx($model,'appl_country'); ?>
                    <?php echo $form->dropDownList($model,'appl_country',$model->countryOptions, array('empty' => 'Select Target Country')); ?>
                    <?php echo $form->error($model,'appl_country'); ?>
            </div>

            <div class="signup">
                    <?php echo $form->labelEx($model,'appl_major'); ?>
                    <?php echo $form->dropDownList($model,'appl_major',$model->majorOptions, array('empty' => 'Select Target Major')); ?>
                    <?php echo $form->error($model,'appl_major'); ?>
            </div>
        </fieldset>

        <div class="signup buttons">
                <?php echo CHtml::submitButton('Submit', array('class'=>'signupButton')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->