<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lib\Library;
use Log;
class tbl_users extends Model
{
    //
	
	protected $library;
	public function __construct()
    	{
	  
    	$this->library = new Library();
    	}


	public function  checkAuth($id,$auth)
	{
    	$data = $this->where('authToken','=',$auth)
    	->where('userId','=',$id)
    	->first();
        if($data)
        {
            return "yes";
        }
        else
        {
            return "no";
            Log::warning('User Authentication Failed.', ['auth' => $auth,'id'=>$id]);
        }

	}
   

    public function email($email,$mobile='')
    {
    	$email = $this->where('email','=',$email)->first();
    	$mobile = $this->where('mobile','=',$mobile)->first();

    	if($email)
    	{
    		return "email";
    	}
    	elseif ($mobile) 
    	{
    		return "mobile";	
    	}
    	else
    	{
    		return "no";
    	}

    }
    
    public function user($id)
    {
    	#return by Id
    	$data = $this->where('userId','=',$id)->first();
    	return $data;

    }
    public function userByEmail($email)
    {
    	#return by email
    	$data = $this->where('email','=',$email)->first();
    	return $data;

    }
    public function register($request)
    {
    	
    	try
    	{
    	
    	$password = $this->library->crypt($request->password);
		$authToken = $this->library->authToken();
		$tempToken = $this->library->tempToken();

		$this->firstName = $request->firstName;
		$this->lastName = $request->lastName; 
		$this->email=$request->email;
		$this->mobile=0;//$request->mobile,
		$this->password=$password;
		$this->authToken=$authToken;
		$this->tempToken=$tempToken;
		$this->deviceToken=0;
		$this->deviceType=0;
		$this->save();

		/*$id = $this->insertGetId([
			"firstName"=>$request->firstName,
			"lastName"=>$request->lastName,
			"email"=>$request->email,
			"mobile"=>0,//$request->mobile,
			"password"=>$password,
			"authToken"=>$authToken,
			"tempToken"=>$tempToken,
			"deviceToken"=>"0",
			"deviceType"=>"0",
            ]);*/
        
        
        Log::info('New User Registered.', 
            ['name' => $request->firstName.$request->lastName,'email'=>$request->email]);
		return response()->json(["result"=>$this->library->status(200)],200);
	}
	catch (\Exception $e) 
	{
        Log::warning('New User Registeration Failed.', 
            ['name' => $request->firstName.$request->lastName,'email'=>$request->email]);

   	 return response()->json(["error"=>$e->getMessage(),"contact"=>"siva"]);
	}
    }

    public function login($email,$pass)
    {
    	try
    	{
    		
    		$password =  $this->library->crypt($pass);
    		$status = $this->where('email','=',$email)
    		->where('password','=',$password)
    		->first();
    		if($status)
    		{
                if($status->profileStatus == 1)
                {
                     Log::info('User Login Success.', ['name' => $email ]);
                
    			 return response()->json(["result"=>$this->library->status(200),"data"=>$this->userByEmail($email)],200);
                }
                else
                {
                    Log::warning('User Login Failed.', ['name' => $email ,'password'=>$pass]);
                    return response()->json(["result"=>$this->library->status(302)],302);
                }

    		}
    		else
    		{
    			return response()->json(["result"=>$this->library->status(201)],201);
    			
    		}

    	}
    	catch(\Exception $e)
    	{
    		return response()->json(["error"=>$e->getMessage(),"contact"=>"siva"]);
    	}
    }
    public function profileUpdate($request)
    {
    	if($request->isFile == 0)#url
    	{
    		$path = $request->profile;
    	}
    	elseif($request->isFile == 1)#file
    	{
    		$file = $request->file('profile');
    		$path = $this->fileUpload($file);
    	}
    	else
    	{
    		$path = '';
    	}
    		
			$this->where('userId','=',$request->header('authId'))
			->update(["firstName"=>$request->firstName,
			"lastName"=>$request->lastName,
			"email"=>$request->email,
			"mobile"=>0,//$request->mobile,
			"authToken"=>$this->library->authToken(),
			"tempToken"=>$this->library->tempToken(),
			"deviceToken"=>"0",
			"deviceType"=>"0",
            ]);

            return response()->json(["result"=>$this->library->status(200)],200);

    }
    public function status($request)
    {
        try
        {
            $this->library = new library();
            $this->where("userId","=",$request->userId)
            ->update(["status"=>$request->statusId]);

        }
        catch(\Exception $e)
        {
            return response()->json(["error"=>$e->getMessage(),"contact"=>"siva"]);
        }

    }
    public function updateAuth($id)
    {
        try
        {
        $this->library = new library();
        $authToken = $this->library->authToken();
        $tempToken = $this->library->tempToken();
            $this->where("userId","=",$id)
            ->update(["authToken"=>$authToken,"tempToken"=>$tempToken]);

        }
        catch(\Exception $e)
        {
            return response()->json(["error"=>$e->getMessage(),"contact"=>"siva"]);
        }

    }
    public function fileUpload($file,$url= '/public')
    {
    	
        $extension = $file->getClientOriginalExtension();
        $filename = date('Ymd_His').'.'.$extension; // renaming image
        $path = public_path($url . date('Ymd'));
        $file->move($path,$filename);
        $data ='/uploads/projectPicture/' . date('Ymd')."/".$filename;
        return $data;

    }


}
