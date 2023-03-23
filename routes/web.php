<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamehostController;
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
    return view('index');
});
Route::view('home','index');
Route::get('signup',[GamehostController::class,'signup']);
Route::post('register_user',[GamehostController::class,'register_user']);
Route::get('login',[GamehostController::class,'login']);
Route::get('game_server',[GamehostController::class,'get_server']);
Route::get('partners',[GamehostController::class,'get_partners']);
Route::get('supports',[GamehostController::class,'get_support']);
Route::get('dedicated',[GamehostController::class,'get_dedicated']);
Route::get('about_us',[GamehostController::class,'get_about_us']);


