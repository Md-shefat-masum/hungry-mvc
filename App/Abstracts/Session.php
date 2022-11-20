<?php

namespace App\Abstracts;

class Session
{
    public function put($index = 0, $data = '')
    {
        if($index){
            $_SESSION[$index] = $data;
        }else{
            $_SESSION[count($_SESSION)] = $data;
        }
    }

    public function all()
    {
        $session_data = (object) $_SESSION;
        return $session_data;
    }
}
