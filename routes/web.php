<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
//    return view('welcome');
//    return "Study link";
//    return ["name"=>"study link", "location" => "mulund"];
//    return dd(request('name'));
       // $firstName = request(key: 'name');
       $firstName = "ekta";
        return view('test',['name'=>$firstName]);
});
