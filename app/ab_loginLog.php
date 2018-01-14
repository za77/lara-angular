<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Exception;

class ab_loginLog extends Model
{
	protected $table ="ab_loginLog";
    
    public function saveLog($obj,$user)
    {
    	
    		$date = date('Y-m-d h:i:s');
    		$this->userId = $user;
    		$this->ipAddress = $obj->ip;
    		$this->country = $obj->country;
    		$this->city = $obj->city;
    		$this->device = $_SERVER ['HTTP_USER_AGENT'];
    		$this->browser = $_SERVER ['HTTP_USER_AGENT'];
    		$this->loggedOn = $date;
    		$this->save();
    		return "ok";
    	
    

    }
   
}
