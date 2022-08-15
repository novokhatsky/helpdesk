<?php

namespace Helpdesk\Controllers;

class AdminController
{
    private $container;


    public function __construct($c)
    {
        $this->container = $c;
    }


    public function index($request, $response)
    {

        $bid = new \Helpdesk\Models\Bid($this->container->db);

        return $this
            ->container
            ->view
            ->render(
                $response,
                'list_all.php',
                [
                    'bids' => $bid->all(),
                ]
            );
    }


    public function detal($request, $response)
    {
        $id_bid = $request->getAttribute('id_bid');

        $bid = new \Helpdesk\Models\Bid($this->container->db);

        return $this
            ->container
            ->view
            ->render(
                $response,
                'detal.php',
                [
                    'bid' => $bid->detal($id_bid),
                ]
            );
    }
}

