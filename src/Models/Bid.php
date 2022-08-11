<?php

namespace Helpdesk\Models;

class Bid
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function add($params)
    {
        $this->db->insertData(
            'insert into bid (author, cabinet, id_service, description)
             values (:fio, :cabinet, :id_service, :description)',
             [
                 'fio' => $params['fio'],
                 'cabinet' => $params['cabinet'],
                 'id_service' => $params['id_service'],
                 'description' => $params['description'],
             ]
        );
    }
}
