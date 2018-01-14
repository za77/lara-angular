<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\lib\Library;
use App\ab_users;
use App\ab_notifications;   
use App\User;
use Exception;


class ApiController extends Controller
{
    //
    protected $library;
    protected $users;
    protected $user;
    protected $notifications;

    public function __construct()
    {
        $pro = config('global.model');
        $users = new ab_users;
        $notifications = new ab_notifications;
        $library = new Library();
        $user = new user();

        $this->library = $library;
        $this->user = $user;
        $this->users = $users;
        #$this->notifications = ${$pro . '_notifications'};
    }

    public function register(Request $request)
    {

    	$email = $request->email;
        
        if(isset($request->mobile))
            $mobile = $request->mobile;    
    	else
            $mobile = '';

        $res  = $this->users->email($email,$mobile);
    	if( $res == "email")
    	{
    		return response()->json(["result"=>$this->library->status(300)],300);
    	}
    	elseif ($res == "mobile") 
        {
            return response()->json(["result"=>$this->library->status(301)],301);
        }
        else
    	{
            return $this->users->register($request);
    		
    	}
    	

    }
    public function login(Request $request)
    {
    	
    	return $this->users->login($request->email,$request->password);    	
    }

    public function profileUpdate(Request $request)
    {
        //$request->isFile = 0=Url;1=file;2=remove;
        return $this->users->profileUpdate($request);

    }
    public function logout(Request $request)
    {
        
        $authToken = $request->header("authToken");
        $authId = $request->header("authId");

        $check =  $this->users->checkAuth($authId,$authToken);
        if($check == "yes")
        {
            $this->users->updateAuth($authId);
            return response()->json(["result"=>$this->library->status(200)],200);
        }
        else
        {
            return response()->json(["result"=>$this->library->status(201)],201);
        }

    }
    
}
