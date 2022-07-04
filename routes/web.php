<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailable;
use App\Mail;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contactez-nous', 'HomeController@contact')->name('contact');
Route::get('/qui-sommes-nous', 'HomeController@about')->name('about');
Route::get('/devenez-vendeur', 'HomeController@vendeur')->name('vendeur');
Route::get('/service/{nom}', 'HomeController@service')->name('service');
Route::post('/do-devenir-vendeur', 'HomeController@devenir_vendeur')->name('devenir-vendeur');
Route::post('/payment/return', 'HomeController@return')->name('returnUrl');
Route::post('/payment/notify', 'HomeController@notify')->name('notifyUrl');
Route::get('/service/{nom}', 'HomeController@service')->name('service');
Route::get('/payement/result', 'HomeController@result')->name('result');
Route::post('/enregistrer-vendeur', 'HomeController@enregistrer_vendeur')->name('enregistrer-vendeur');
Route::get('/supprimer-vendeur/{id}', 'HomeController@supprimer_vendeur')->name('supprimer-vendeur');
Route::post('send-message', 'HomeController@send_message')->name('contact.send');

Route::get('vendeur/{code}/prospection', 'HomeController@prospection')->name('prospection');
Route::post('prospect', 'HomeController@prospect')->name('prospect');
Route::get('biographie', 'HomeController@biographie')->name('biographie');
Route::get('faq', 'HomeController@faq')->name('faq');

Route::post('enregistrer-telechargement', 'HomeController@telechargement')->name('telechargement');
