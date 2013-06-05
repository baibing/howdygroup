<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class='grid_3 alpha'>
    <h6 class='subTitle'>Other Contacts</h6>
    <p>Email: <a>info@howdygroup.net</a></p>
    <p>QQ: 879967233</p>
</div>

<div class='grid_9 omega'>
    <?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

    <?php else: ?>

    <p>
    If you have business inquiries or other questions, please fill out the form below. Thank you.
    </p>

    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>false,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
    )); ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                    <?php echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name'); ?>
                    <?php echo $form->error($model,'name'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'company'); ?>
                    <?php echo $form->textField($model,'company'); ?>
                    <?php echo $form->error($model,'company'); ?>
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
                    <?php echo $form->labelEx($model,'subject'); ?>
                    <?php echo $form->dropDownList($model,'subject',$model->subjectOptions, array('empty' => 'Select Subject')); ?>
                    <?php echo $form->error($model,'subject'); ?>
            </div>

            <div class="row">
                    <?php echo $form->labelEx($model,'message'); ?>
                    <?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'message'); ?>
            </div>

            <?php if(CCaptcha::checkRequirements()): ?>
            <div class="row">
                    <?php echo $form->labelEx($model,'verifyCode'); ?>
                    <div>
                    <?php $this->widget('CCaptcha',array('clickableImage'=>true,'showRefreshButton'=>true)); ?>
                    <?php echo $form->textField($model,'verifyCode'); ?>
                    </div>
                    <div class="hint">Please enter the letters as they are shown in the image above.
                    <br/>Letters are not case-sensitive.</div>
                    <?php echo $form->error($model,'verifyCode'); ?>
            </div>
            <?php endif; ?>

            <div class="row buttons">
                    <?php echo CHtml::submitButton('Submit',array('class'=>'signupButton')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div><!-- form -->

    <?php endif; ?>
</div>