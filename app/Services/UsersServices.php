<?php

namespace App\Services;

use App\User;

class UsersServices
{
    public static function getRole($role)
    {
        $author =  'Admin';
        if(User::USER == $role){
            $author = 'User';
        }
        return $author;
    }
    
    public static function getStatus($status)
    {
        $action =  'Active';
        if(User::NOTACTIVE == $status){
            $action = 'Not active';
        }
        return $action;
    }
}
