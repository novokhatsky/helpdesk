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


    public function filtered($request, $response)
    {

        $bid = new \Helpdesk\Models\Bid($this->container->db);

        return $this
            ->container
            ->view
            ->render(
                $response,
                'list_all.php',
                [
                    'bids' => $bid->filtered($request->getAttribute('id_filter')),
                ]
            );
    }


    public function detal($request, $response)
    {
        $id_bid = $request->getAttribute('id_bid');

        $bid = new \Helpdesk\Models\Bid($this->container->db);

        $listStatus = $this
            ->container
            ->db
            ->getList('select id_status, name from status order by id_status');

        return $this
            ->container
            ->view
            ->render(
                $response,
                'detal.php',
                [
                    'bid' => $bid->detal($id_bid),
                    'statuses' => $listStatus
                ]
            );
    }


    public function changeStatus($request, $response)
    {
        $data = $request->getParsedBody();
        $new_status = $data['new_status'];
        $id_bid = $request->getAttribute('id_bid');

        $this
            ->container
            ->db
            ->updateData(
                'update bid set id_status = :new_status where id_bid = :id_bid',
                [
                    'new_status' => $data['new_status'],
                    'id_bid' => $id_bid,
                ]
            );

        return $response->withRedirect("/admin", 301);
    }


    public function status($request, $response)
    {
        $id_bid = $request->getAttribute('id_bid');

        $bid = new \Helpdesk\Models\Bid($this->container->db);
        $statuses = new \Helpdesk\Models\Status($this->container->db);

        return $this
            ->container
            ->view
            ->render(
                $response,
                'status.php',
                [
                    'status' => $bid->currentStatus($id_bid),
                    'all_status' => $statuses->all(),
                ]

            );
    }
}
