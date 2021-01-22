<?php

  
$app->group('',function()
{
    
    $this->get('/', function($request, $response){
        return $this->view->render($response, 'index.twig');
    })->setName('home');

    $this->get('/shop', function($request, $response){
        return $this->view->render($response, 'shop.twig');
    })->setName('shop');

    $this->get('/product/{id}', function($request, $response, $args){
        $id = $args['id'];
        return $this->view->render($response, 'product.twig', compact('id'));
    })->setName('product');

    $this->get('/about', function($request, $response, $args){
        return $this->view->render($response, 'aboutUs.twig');
    })->setName('about');

    $this->get('/contact', function($request, $response, $args){
        return $this->view->render($response, 'contact.twig');
    })->setName('contact');

    $this->get('/blog', function($request, $response, $args){
        return $this->view->render($response, 'blog.twig');
    })->setName('blog');

    $this->get('/payment', function($request, $response, $args){
        return $this->view->render($response, 'payment.twig');
    })->setName('payment');

    $this->get('/blogview[/{id}]', function($request, $response, $args){
        return $this->view->render($response, 'blogview.twig');
    })->setName('blogview');

    $this->get('/cart', function($request, $response, $args){
        return $this->view->render($response, 'cart.twig');
    })->setName('cart');

    $this->get('/remove', function($request, $response, $args){
        return $this->view->render($response, 'cart.twig');
    })->setName('remove');

    $this->get('/services', function($request, $response, $args){
        return $this->view->render($response, 'services.twig');
    })->setName('services');
	
	$this->post('/payment', function($request, $response, $args){
        echo 'payment card details will load';
    })->setName('payment');
	
	$this->get('/login', function($request, $response, $args){
        echo 'login in user';
    })->setName('login');
	
	$this->get('/register', function($request, $response, $args){
        echo 'registering user';
    })->setName('register');

    
});

