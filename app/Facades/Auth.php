<?php


namespace App\Facades;


use Illuminate\Support\Facades\Auth as BasicAuth;

class Auth extends BasicAuth
{
    static public function isAdmin () {
        return self::user()->is_admin;
    }
}
