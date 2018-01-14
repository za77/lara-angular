<?php
namespace App\lib;

use DB;
use Illuminate\Http\Request;


class Library
{
	

	function authToken()
	{
		#Generate authToken Randomly
#		echo $low."<br>";
		$medium = hash('sha384', "jci");
#		echo $medium."<br>";
		$high = bcrypt($medium);
		return $high;

	}
	function newOtp()
	{
		$otp = rand(11111,99999);
		return $otp;
	}
	function tempToken()
	{
		#Generate tempToken Randomly

		$medium = hash('sha384', "jci");
		$high = bcrypt($medium);
		return substr($high,-15);
	}
	function authCheck()
	{
		#Generate authCheck Based On Email and Password


	}
	function crypt($password)
	{
	$key = hash('sha256', 'jciIndiaCommunity');
        $iv = substr(hash('sha256', ')*&C!@A(&B@!S^&'), 0, 16);
        $output = openssl_encrypt($password, "AES-256-CBC", $key, 0, $iv);
        $npassword = base64_encode($output);
        return $npassword;

	}
	function status($status)
	{
		 switch ($status) 
		 {
                case '200':
                    return  'OK';
                    break;
                case '201':
                return  'UNAUTHORIZED';
                break;
                case '300':
                return  'EMAIL AREADY REGISTERED';
                break;
                case '301':
                return  'MOBILE AREADY REGISTERED';
                break;
                case '302':
                return  'YOUR ACCOUNT HASBEEN DEACTIVATED BY ADMIN';
                break;
  
            }
	}
}