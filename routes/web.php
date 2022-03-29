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

    $fumetti = ["fumetti" => config('fumetti')];
   
    return view('comics', $fumetti);
});

Route::get("/comics/fumetto/{id}", function($id){

    $fumetti = config("fumetti");
    
    if(is_numeric($id) && $id>=0 && $id<count($fumetti)){
        $fumetto = $fumetti[$id];
        return view("dettagliFumetto", compact("fumetto"));
    }else{
        abort(404, "Fumetto non trovato!");
    }
});