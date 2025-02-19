<?php
    namespace App\Controller;
    
    use Core\Connect\DbConnect;
    use App\Model\ContactModel;
    use App\Model\EmailModel;

    class PageController{
        public function index(){
            view("index");
        }
        
        public function about(){
            view("about");
        }
        
        public function contact(){
            $contactModel = new ContactModel(DbConnect::start());
            $contactModel->sendInfo();

            view("contact",[
                "allEmails" => $contactModel->selectAll(),
                
            ]);

        }
        
        public function addContact(){
            $contactModel = new ContactModel(DbConnect::start());
            $contactModel->sendInfo();

            view("contact",[
                "allEmails" => $contactModel->selectAll(),
                
            ]);

        }
        
        // public function addEmail(){
        //     $emailModel = new EmailModel(DbConnect::start());
        //     $emailModel->sendEmail();

        //     view("contact",[
        //         "allEmails" => $contactModel->selectAll(),
                
        //     ]);

        // }
        
        public function thankYou(){
            view("thank-you");
        }
        
        public function services(){
            view("services");
        }

        public function service(){
            view("service");
        }
    }
?>