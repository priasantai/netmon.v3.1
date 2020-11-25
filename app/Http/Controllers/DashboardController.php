<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard (){
        $user = \App\Models\User::all('id')->count();
        $fo = \App\Models\fo::all('id')->count();
        $radio = \App\Models\radio::all('id')->count();
        $server = \App\Models\serverM::all('id')->count();
        return view ('dashboard',compact('user','fo','radio','server'));
    }
    public function index (){
        $fo1 = \App\Models\fo::all('id')->count();
        $radio1 = \App\Models\radio::all('id')->count();
        $server1 = \App\Models\serverM::all('id')->count();
        $fo = \App\Models\fo::all();
        $radio = \App\Models\radio::all();
        $server = \App\Models\serverM::all();
        return view ('index',['fo' => $fo,'radio' => $radio,'server' => $server],
        compact('fo1','radio1','server1'));
    }
        public function fo (){
        // $fo = DB::table('fos')->get(); // tanpa model
        $fo = \App\Models\fo::simplePaginate(10);
        return view ('fo',['fo' => $fo]);
    }
    public function radio (){
        // $radio = DB::table('radios')->get(); // tanpa model
        $radio = \App\Models\radio::simplePaginate(10);
        return view ('radio',['radio' => $radio]);
    }
    public function server (){
        // $server = DB::table('servers')->get(); // tanpa model
        $server = \App\Models\serverM::simplePaginate(10);
        return view ('server',['server' => $server]);
    }
    public function setting (){
        // $user = DB::table('settings')->get(); // tanpa model
        $user = \App\Models\user::all();
        return view ('setting',['setting' => $setting]);
    }
}
