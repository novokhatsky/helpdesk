<?php

namespace Helpdesk\Models;

class Auth
{
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }


    public function __invoke($request, $response, $next)
    {
        if ($this->user->isLogined()) {
            $response = $next($request, $response);
        } else {
            return $response->withRedirect('/login');
        }

        return $response;
    }
}
