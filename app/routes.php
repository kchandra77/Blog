<?php

use FastRoute\RouteCollector;
 
return function(RouteCollector $router) {
  
    $router->get('/', 'App\Controller\Home::print');
    
    $router->get('/blog/contact', 'App\Controller\Contact::print');

    $router->post('/blog/contact', 'App\Controller\Contact::process');

    $router->get('/blog/create', 'App\Controller\Create::print');

    $router->post('/blog/create', 'App\Controller\Create::process');
    
    $router->get('/blog/modify', 'App\Controller\Modify::print');

    $router->get('/blog/delete', 'App\Controller\Delete::print');


};
