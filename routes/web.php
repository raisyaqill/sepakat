
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('landing');

Route::prefix('auth')->name('auth.')->group(function () {
    Route::view('/account-type', 'auth.account-type')->name('account-type');
    Route::view('/client/register', 'auth.client-register')->name('client.register');
    Route::view('/vendor/register', 'auth.vendor-register')->name('vendor.register');
});
