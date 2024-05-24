<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::resource('Profs',ProfController::class);
//Route::resource('Etudiants',EtudiantController::class);

Route::get('/send-email', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email sent from Laravel using Postfix.'
    ];

    \Mail::to('wailw2445@gmail.com')->send(new TestMail($details));

    return 'Email sent!';
});
