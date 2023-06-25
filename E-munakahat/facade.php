<?php

class formFacade
{
    private $formController;

    public function __construct(authentification_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(changepass_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(forgotpass_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(list_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(login_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(logout_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(registration_Controller $formController)
    {
        $this->formController = $formController;
    }

    public function __construct(update_Controller $formController)
    {
        $this->formController = $formController;
    }

    //from registration to registration_controller
    public function submitForm($applicant_ic, $applicant_name, $applicant_gender, $applicant_phone, $applicant_email, $account_password)
    {
        $this->formController->sendForm($applicant_ic, $applicant_name, $applicant_gender, $applicant_phone, $applicant_email, $account_password);
    }

    

}

?>