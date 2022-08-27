<?php

namespace Helpdesk\Controllers;

class LoginController
{
    private $container;


    public function __construct($c)
    {
        $this->container = $c;
    }


    public function index($request, $response)
    {
        return $this
            ->container
            ->view
            ->render(
                $response,
                'login.php'
            );
    }


    public function checkLogin($request, $response)
    {
        $data = $request->getParsedBody();

        if ($data['login'] === 'val' && $data['pass'] === 'era') {
            $this->container->session->login = 'val';

            return $response->withRedirect('/admin');
        }

        return $response->withRedirect('/login');
    }


    public function logout($request, $response)
    {
        $this->container->session->login = '';

        return $response->withRedirect('/');
    }
}
