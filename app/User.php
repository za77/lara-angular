<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\lib\Library;
use App\tbl_loginLog;

class User extends Authenticatable
{
    protected $lib;
    protected $loginLog;

    public function __construct()
    {
        $this->lib = new Library();
        $this->loginLog = new tbl_loginLog();
       
    }
    public function login($req)
    {
        $password = $this->lib->crypt($req->password);
        $data = $this->where('email','=',$req->email)
        ->where('password','=',$password)
        ->first();

        if($data)
        {
            $rand = rand(1,2);
            if($rand == 1)
                $url = 'https://ipapi.co/json';
            else
                $url = 'http://ipinfo.io/';

        $loc = file_get_contents($url);
        $obj = json_decode($loc);
        $this->loginLog->saveLog($obj,$data->id);

            return $data;
        }
        else
        {
            return "failed";
        }
    }
    
}
