<?php

use Illuminate\Database\Seeder;
use App\lib\Library;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lib = new Library();
        $pass = config('global.projectPassword');
        $date = date('Y-m-d h:i:s');
        $password = $lib->crypt($pass);
         DB::table('users')->insert([
            'firstName' => 'lara',
            'lastName' => 'project',
            'email' => config('global.projectEmail'),
            'mobile'=>config('global.projectMobile'),
            'password'=>$password,
            'authToken'=>$lib->authToken(),
            'tempToken'=>$lib->tempToken(),
            'deviceToken'=>'xxxxx',
            'deviceType'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
    }
}
