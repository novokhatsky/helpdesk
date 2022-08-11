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

        $listService = $this
            ->container
            ->db
            ->getList('select id_service, name from service order by id_service');

        return $this
            ->container
            ->view
            ->render(
                $response,
                'index.php',
                [
                    'service' => $listService,
                ]
            );
    }

    public function newbid($request, $response)
    {
        $data = $request->getParsedBody();

        $params = [
            'fio' => $data['fio'],
            'cabinet' => $data['cabinet'],
            'id_service' => $data['id_service'],
            'description' => $data['description'],
        ];

        $new_bid = new \Helpdesk\Models\Bid($this->container->db);

        // todo ошибки обработать через исключения
        $new_bid->add($params);

        return $this
            ->container
            ->view
            ->render(
                $response,
                'save_ok.php'
            );

    }
}
