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
                    dt_create desc'
            );
    }

    
    public function filtered($id_filter)
    {
        return $this
            ->db
            ->getList('
                select
                    id_bid, dt_create, author, cabinet, status.name as sname
                from
                    bid
                    join status using (id_status)
                where
                    bid.id_status = :id_filter
                order by
                    dt_create desc',
                ['id_filter' => $id_filter]
            );
    }


    public function detal($id_bid)
    {
        return $this
            ->db
            ->getRow('
                select
                    id_bid, dt_create, author, cabinet, description,
                    status.name as sname, service.name as uname
                from
                    bid
                    join status using (id_status)
                    join service using (id_service)
                where
                    id_bid = :id_bid',
                ['id_bid' => $id_bid]
            );
    }


    public function currentStatus($id_bid)
    {
    }
}
