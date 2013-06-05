<?php

class WhatwedoController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/whatwedo/index.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the admission page
	 */
	public function actionAdmission()
	{
            $adModel = new AdmissionProgram;
            if(isset($_POST['AdmissionProgram']))
            {
                $adModel->attributes=$_POST['AdmissionProgram'];
                if($adModel->validate())
                {
                    $Criteria = new CDbCriteria();
                    $Criteria->condition = "country = '$adModel->country' AND sel_major = '$adModel->sel_major' AND degree = '$adModel->degree'";
                    $links = AdmissionProgram::model()->findAll($Criteria);
                    $this->render('programs',array('model'=>$adModel, 'links'=>$links));
                    return;
                }
            }
            
            $caseModel = new SuccessfulCase;
            if(isset($_POST['SuccessfulCase']))
            {
                $caseModel->attributes=$_POST['SuccessfulCase'];
                if($caseModel->validate())
                {
                    $Criteria = new CDbCriteria();
                    $Criteria->condition = "country = '$caseModel->country'";
                    $Criteria->order = 'university';
                    $links = SuccessfulCase::model()->findAll($Criteria);
                    $this->render('case',array('model'=>$caseModel, 'links'=>$links, 'status'=>'1'));
                    return;
                }
            }

            $this->render('admission',array('adModel'=>$adModel, 'caseModel'=>$caseModel));
	}

	/**
	 * Displays the training page
	 */
	public function actionTraining()
	{
            $this->render('training');
	}

	/**
	 * Displays the workshop page
	 */
	public function actionWorkshop()
	{
            $this->render('workshop');
	}

	/**
	 * Displays the consulting page
	 */
	public function actionConsulting()
	{
            $this->render('consulting');
	}

	/**
	 * Displays the signup page
	 */
        public function actionSignup()
        {
            $model=new AdmissionUserInfo;

            // uncomment the following code to enable ajax-based validation
            if(isset($_POST['ajax']) && $_POST['ajax']==='admission-user-info-signup-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            if(isset($_POST['AdmissionUserInfo']))
            {
                $model->attributes=$_POST['AdmissionUserInfo'];
                if($model->validate())
                {
                    if($model->save()) {
                        $this->render('thankyou',array('model'=>$model,'type'=>'admission'));
                        return;
                    }
                }
            }
            $this->render('signup',array('model'=>$model));
        }

        public function actionVip()
        {
            $model=new AdmissionVip;

            // uncomment the following code to enable ajax-based validation
            if(isset($_POST['ajax']) && $_POST['ajax']==='admission-vip-vip-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            if(isset($_POST['AdmissionVip']))
            {
                $model->attributes=$_POST['AdmissionVip'];
                if($model->validate())
                {
                    if($model->save()) {
                        $this->render('thankyou',array('model'=>$model,'type'=>'vip'));
                        return;
                    }
                }
            }
            $this->render('vip',array('model'=>$model));
        }

        public function actionSignup_training()
        {
            $model=new TrainingUserInfo;

            // uncomment the following code to enable ajax-based validation
            if(isset($_POST['ajax']) && $_POST['ajax']==='training-user-info-signup_training-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            if(isset($_POST['TrainingUserInfo']))
            {
                $model->attributes=$_POST['TrainingUserInfo'];
                if($model->validate())
                {
                    if($model->save()) {
                        $this->render('thankyou',array('model'=>$model,'type'=>'training'));
                        return;
                    }
                }
            }
            $this->render('signup_training',array('model'=>$model));
        }
        
        public function actionSignup_workshop()
        {
            $model=new WorkshopUserInfo;

            // uncomment the following code to enable ajax-based validation
            if(isset($_POST['ajax']) && $_POST['ajax']==='workshop-user-info-workshopForm-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            if(isset($_POST['WorkshopUserInfo']))
            {
                $model->attributes=$_POST['WorkshopUserInfo'];
                if($model->validate())
                {
                    if($model->save()) {
                        $this->render('thankyou',array('model'=>$model,'type'=>'workshop'));
                        return;
                    }
                }
            }
            $this->render('signup_workshop',array('model'=>$model));
        }

        public function actionCase() {
            $university = Yii::app()->getRequest()->getQuery('university');
            $caseModel = new SuccessfulCase;
            $caseModel->university = $university;
            $Criteria = new CDbCriteria();
            $Criteria->condition = "university = '$university'";
            $links = SuccessfulCase::model()->findAll($Criteria);
            $this->render('case',array('model'=>$caseModel, 'links'=>$links, 'status'=>'2'));

        }
}