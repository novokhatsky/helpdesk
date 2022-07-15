<?php

namespace Helpdesk\Controllers;

class HomeController
{
    private $container;


    public function __construct($c)
    {
        $this->container = $c;
    }


    public function index($request, $response)
    {
        $name = $request->getAttribute('name');

        return $this
            ->container
            ->view
            ->render(
                $response,
                'index.php',
                [
                    'name' => $name,
                ]
            );
    }
}
