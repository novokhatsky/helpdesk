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


    public function all()
    {
        return $this
            ->db
            ->getList('
                select
                    id_bid, dt_create, author, cabinet, status.name as sname
                from
                    bid
                    join status using (id_status)
                order by
                    dt_create'
            );
    }
}
