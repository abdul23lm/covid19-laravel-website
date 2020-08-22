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


Route::get('/', 'HomeController@index')->name('index');

Route::resource('rs-rujukan', 'RSRujukanController');

Route::get('/browse/rs-rujukan', 'RSRujukanController@browse')->name('rs-rujukan.browse');

Route::get('/', 'GetApiCovid19Controller@index')
    ->name('index');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('hospital', 'HospitalController');
        Route::get('/browse/hospital', 'HospitalController@browse')->name('hospital.browse');
    });

Auth::routes([
    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...
]);
