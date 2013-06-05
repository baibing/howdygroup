<?php
/* @var $this WhatwedoController */
/* @var $adModel AdmissionProgram */
/* @var $caseModel SuccessfulCase */


$this->breadcrumbs=array(
	'What We Do',
        'Admission Consulting',
);
?>

<div class="grid_12">
    <h6 class="normalTitle">Admission Consulting</h6>
    <p>HowdyGroup provides professional admission consulting service for Urban Planning, Urban Design, Architecture, and Landscape Architecture major students in applying overseas master’s and doctoral programs. Our consultants are graduates of U.S. / U.K. graduate schools in these four majors. We are familiar with the process, and we know what matters in your application. Our service packages are flexible; you can customize your service package based on your specific needs.</p>
</div>

<div class="clear"></div>

<div class="grid_2 alpha">
    <h6  class="subTitle" style='padding-left: 10px;'>Regular Service Package</h6>
</div>

<div class="grid_10 omega">
    <div>
        <a href="#" class="step">Step 1 Get Started</a>
        <div class="step_text">
            You will be asked to fill out a simple online questionnaire, telling us your basic academic background, including your undergraduate university, GPA, GRE and TOEFL score (if acquired). Click to enter>>
            <a href="<?php echo Yii::app()->baseUrl.'/index.php/whatwedo/signup' ?>"><input type="button" class="signupButton" value="Questionnaire"/></a>
        </div>
    </div>
    <div>
        <a href="#" class="step">Step 2 Match Schools & Programs</a>
        <div class="step_text">We evaluate your basic academic background, and provide a preliminary list of target graduate schools & programs for your consideration.</div>
    </div>    
    <div>
        <a href="#" class="step">Step 3 Match Consultant</a>
        <div class="step_text">Once you decide to choose our service, we will match you with a HowdyGroup consultant after signing a service contract.</div>
    </div>    
    <div>
        <a href="#" class="step">Step 4 Pre-preparation</a>
        <div class="step_text">Your consultant will familiarize you with the materials you need to prepare. You will be asked to fill out another comprehensive questionnaire which helps in describing to your consultant the following: your personal and academic background, working and research experience (if any), interest in pursuing a master’s or doctoral degree, short-term and long-term career goals. Your consultant will work with you to finalize a list of schools & programs for application.</div>
    </div>    
    <div>
        <a href="#" class="step">Step 5 Get Working</a>
        <div class="step_text">Your consultant will help you brainstorm/write/translate/edit your statement of purpose, personal statement, resume, essays, and design portfolio (if required). Your consultant will also help you translate your transcript if your undergraduate university doesn’t provide an English version.</div>
    </div>    
    <div>
        <a href="#" class="step">Step 6 Online application</a>
        <div class="step_text">Your consultant will help you fill out online applications to chosen schools, and mail out supplementary materials (if required).</div>
    </div>    
    <div>
        <a href="#" class="step">Step 7 Get Admitted</a>
        <div class="step_text">We will make sure all admission letters reach you in a timely manner. If an interview is required before admission, we will conduct a mock interview for you with a native speaker.</div>
    </div>    
    <div>
        <a href="#" class="step">Step 8 Ready to Go</a>
        <div class="step_text">Your consultant will guide you in filling out forms for your Visa application; we will conduct a mock visa appointment for you with a native speaker.</div>    
    </div>    
</div>

<div class="clear"></div>
    
<div class="grid_12"><p></p></div>

<div class="clear"></div>
    
<div class="grid_2 alpha"><h6  class="subTitle" style='padding-left: 10px;'>VIP Extra Service</h6></div>

<div class="grid_10 omega">
    <div>
        <a href="#" class="step">Schools & Programs Tour</a>
        <div class="step_text">
            We will organize a tour to your perspective schools & programs, familiarize you with the cities where those schools are located, arrange a meeting with program coordinator, visit classes, etc.  Sign up if interested >>
            <a href="<?php echo Yii::app()->baseUrl.'/index.php/whatwedo/vip' ?>"><input type="button" class="signupButton" value="Sign Up"/></a>
        </div>    
        <a href="#" class="step">Planning & Design Intern and Professional Recommendation</a>
        <div class="step_text">
            Our Planning & Design Consulting department can offer professional internships to build your work experience by working with our planners and designers on real projects. You will receive recommendation letters from us for your internship.<br>
        </div>    
        <a href="#" class="step">English Training</a>
        <div class="step_text">
            We will extend our service in the near future, providing English training with native speakers to help VIP clients with the GRE and TOEFL tests.<br>
        </div>    
    </div>
</div>

<div class="clear"></div>
    
<div class="grid_12"><p></p></div>

<div class="clear"></div>
    
<div class="grid_2 alpha">
    <h6  class="subTitle" style='padding-left: 10px;'>Program Links</h6>
</div>

<div class="grid_10 omega">
    <?php echo $this->renderPartial('programForm',array('model'=>$adModel)); ?>
</div>

<div class="clear"></div>

<div class="grid_2 alpha">
    <h6  class="subTitle" style='padding-left: 10px;'>Successful Cases</h6>
</div>

<div class="grid_10 omega">
    <?php echo $this->renderPartial('caseForm',array('model'=>$caseModel)); ?>
</div>

