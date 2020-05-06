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

    Nexmo::message()->send([
        'to'   => '919538816148',
        'from' => 'Vonage SMS API',
        'text' => 'Welcome to the Codezen Application!'

    ]);

    return view('welcome');


});


    use App\Notifications\WelcomeNotification;

Route::get('/test', function () {

    echo "sds";
    // return request()->user();

    return Notification::send(request()->user(), new WelcomeNotification());



});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
