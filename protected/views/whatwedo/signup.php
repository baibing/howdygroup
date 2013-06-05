<?php
/* @var $this AdmissionUserInfoController */
/* @var $model AdmissionUserInfo */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
        'Questionnaire',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admission-user-info-signup-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <fieldset class="actionForm">
          <legend class="normalTitle">Basic Academic Background Info</legend>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

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

            <div class="signup">
                    <?php echo $form->labelEx($model,'gpa'); ?>
                    <?php echo $form->textField($model,'gpa'); ?>
                    <?php echo $form->error($model,'gpa'); ?>
            </div>

            <div class="signup">
                    <?php echo $form->labelEx($model,'appl_term'); ?>
                    <?php echo $form->dropDownList($model,'appl_term',$model->termOptions, array('empty' => 'Select Expected Semester')); ?>
                    <?php echo $form->error($model,'appl_term'); ?>
            </div>

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

            <div class="signup">
                    <?php echo $form->labelEx($model,'appl_degree'); ?>
                    <?php echo $form->dropDownList($model,'appl_degree',$model->degreeOptions, array('empty' => 'Select Target Degree')); ?>
                    <?php echo $form->error($model,'appl_degree'); ?>
            </div>

            <div class="signup">
                    <?php echo $form->labelEx($model,'toefl'); ?>
                    <?php echo $form->textField($model,'toefl'); ?>
                    <?php echo $form->error($model,'toefl'); ?>
            </div>

            <div class="signup">
                    <?php echo $form->labelEx($model,'gre'); ?>
                    <?php echo $form->textField($model,'gre'); ?>
                    <?php echo $form->error($model,'gre'); ?>
            </div>
        </fieldset>

	<div class="signup button">
		<?php echo CHtml::submitButton('Submit', array('class'=>'signupButton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->