<?php

$app->group('/dash',function()
{
    $this->get('', function($request, $response, $args){
        return $this->view->render($response, 'dashboards/index.twig');
    })->setName('dash');
});