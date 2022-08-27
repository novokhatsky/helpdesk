<?php

namespace Helpdesk\Models;

class User
{
    private $session;

    public function __construct($session)
    {
        $this->session = $session;
    }


    public function isLogined()
    {
        return $this->session->login == 'val';
    }
}

