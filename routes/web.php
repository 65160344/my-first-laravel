<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/my-route', function(Request $req){
    $data['myinput'] = $req->input('myinput'); 
    return view('myroute', $data);
});