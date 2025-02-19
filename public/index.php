<?php
  require "../vendor/autoload.php";
  require "../core/helpers.php";
  require "../app/routes.php";

  use App\Model\ContactModel;
  use core\connect\DbConnect;
  use App\Controller\PageController;
  use App\Controller\FooterController;
  use App\Controller\Pages;

  $connect = DbConnect::start();

  $emailModel = new ContactModel($connect);

  // dd($emailModel->selectAll());

  // Run it!
    $router->run();
?>