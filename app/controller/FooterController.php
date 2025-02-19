<?php
    namespace App\Controller;
    
    use Core\Connect\DbConnect;
    use App\Model\ContactModel;
    use App\Model\EmailModel;

    class FooterController{
        public function addEmail(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $emailModel = new EmailModel(DbConnect::start());
                $emailModel->sendEmail();

                view("contact");
            }
        }
    }
?>