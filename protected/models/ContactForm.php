<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
        public $company;
        public $phone;
	public $email;
	public $subject;
	public $message;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, phone, email, subject, message', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
        
        /**
	 * Retrieves a list of degrees to select in the dropdown element
	 */
	public function getSubjectOptions() {
		return array(
                        "Admission Consulting" => "Admission Consulting",
                        "Digital Training" => "Digital Training",
                        "Design Portfolio Workshop" => "Design Portfolio Workshop",
                        "Planning & Design Consulting" => "Planning & Design Consulting",
                );
        }
}