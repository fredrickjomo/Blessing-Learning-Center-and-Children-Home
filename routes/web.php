<?php

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



Auth::routes();



Route::middleware(['auth'])->group(function(){ //routes to be accessed once a user logs in


    Route::resource('user','UsersController');
    Route::resource('Children','ChildrenController');
    Route::resource('Admin','AdminController');
    Route::get('Admin/children/index','AdminController@viewChild')->name('Admin.viewChild');
    Route::get('Admin/children/add','AdminController@addChild')->name('Admin.addChild');
    Route::get('Admin/children/edit/update','AdminController@editChild')->name('Admin.editChild');
    Route::get('Admin/children/delete','AdminController@deleteChild')->name('Admin.deleteChild');

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('Sponsor/index','SponsorshipController@store');
Route::resource('Contact_Us','ContactsController');
Route::resource('AboutUs','About_UsController');
Route::resource('Sponsor','SponsorshipController');
Route::get('donations/donate_financially','DonationsController@donate_financially');
Route::resource('donations','DonationsController');


Route::group(['middleware'=>'App\Http\Middleware\AdminMiddleware'],function (){
    Route::get('/admin',function (){
        Route::resource('Admin','AdminController');

    });
});