<?php
namespace App\Controller\Pages;

use Core\Connect\DbConnect;

class ServiceController
{
    public function home(){
        view('services/home');
    }
    
    public function business(){
        view('services/business');
    }
    
    public function Geyser(){
        view('services/geyser');
    }
    
    public function lights(){
        view('services/light');
    }
}