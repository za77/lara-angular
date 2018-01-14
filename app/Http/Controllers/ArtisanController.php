<?php

namespace App\Http\Controllers;
use Artisan;
use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    //
	public function developer()
	{
		return view('dev.index');	
	}
	public function cronDetails()
	{
		return view('dev.cronDetails');	
	}
	public function manageController()
	{
		return view('dev.manageController');	
	}
	public function createController()
	{
		$path =  app_path('Http/Controllers/');

	Artisan::call('make:controller', [
	        'name' => 'sampleController'
	    ]);
    $controller = 'sampleController.php';
	$path = $path.$controller  ;
	$user = "root";
	chown($path, $user);
	$stat = stat($path);
	return $stat;
	}
	public function createModel()
	{

	}
	public function rollBackMigration()
	{

	}
	public function migrate()
	{

	}
	public function loginLogs()
	{
		return view('dev.manageLoginlog');
	}
	public function errorLogs()
	{
		return view('dev.manageError');
	}
	public function warningLogs()
	{
		return view('dev.manageWarning');
	}
}
