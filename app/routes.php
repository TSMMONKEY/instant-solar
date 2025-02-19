<?php
    // Create Router instance
    $router = new \Bramus\Router\Router();

    // Define routes
 $router->get('/', 'App\Controller\PageController@index');

 $router->get('/about', 'App\Controller\PageController@about');

 $router->get('/contact', 'App\Controller\PageController@contact');

 $router->post('/contact', 'App\Controller\PageController@addContact');

 $router->post('/save-email', 'App\Controller\FooterController@addEmail');

 $router->get('/thank-you', 'App\Controller\PageController@thankYou');

 $router->get('/about/{name}', function($name) { 
    echo "About Page $name";
 });

 $router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "404 ERROR: PAGE NOT FOUND";
});

// Services  
$router->get('/services', 'App\Controller\PageController@services');

$router->get('/service/home-solar', 'App\Controller\Pages\ServiceController@home');
$router->get('/service/business-solar', 'App\Controller\Pages\ServiceController@business');
$router->get('/service/solar-geyser', 'App\Controller\Pages\ServiceController@geyser');
$router->get('/service/solar-lights', 'App\Controller\Pages\ServiceController@lights');

?>