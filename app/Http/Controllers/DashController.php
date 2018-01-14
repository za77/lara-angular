<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\lib\Library;
use App\ab_users;
use App\ab_notifications;   
use App\User;
use Exception;
use Storage;
use Session;
class DashController extends Controller
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
    public function fire()
    {

    }
    public function login()
    {
            return view('admin.login');
    }
    public function doLogin(Request $request)
    {
       try
        { 

            if($request->email == 'sigu@devp.com')
            {
                if($request->password == 'qwert7')
                {
                    $request->session()->put('devp', $request->email);
                    
                        
                        Storage::prepend('loginLog.log', 'Prepended Text');
                        Storage::prepend('warningLog.log', 'Prepended Text');
                        
                    
                    return redirect('/developer/manageController');
                }
                else
                {
                    Storage::prepend('loginFailed.log', 'Prepended Text Failed');
                }
            }
            else
            {
                $status = $this->user->login($request);
                
                if($status == "failed")
                {
                    return redirect('/login')->with('status','Login Failed');
                }
                else
                {
                $request->session()->put('authId', $status->authToken);
                return redirect('/');
                
                }
    
            }
        }
        catch(\Exception $e)
        {
            return $e;
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('devp');
        $request->session()->forget('authId');
        return redirect('/login')->with('status','Logout Successfully');
    }
    public function index()
    {
        
    	return view('admin.index');
    }

    public function ip(Request $request)
    {
        #https://ipapi.co/json
        

        
        $loc = file_get_contents('http://ipinfo.io/');
        echo $loc;
        $obj = json_decode($loc);
        echo $obj->ip;

        echo "<br>";
        $loc = file_get_contents('http://ipapi.co/json');
        echo $loc;
        echo $loc->ip;
        /*$obj = json_decode($loc);
        echo $obj;*/

        /*http://ipinfo.io*/


    }   
}

