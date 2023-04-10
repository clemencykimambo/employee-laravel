<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [Homecontroller::class, 'redirect']);

Route::get('AddEmployee', [Homecontroller::class, 'AddEmployee']);

Route::get('country', [Homecontroller::class, 'country']);

Route::post('uploademployee', [Homecontroller::class, 'uploademployee']);

Route::post('uploadcountry', [Homecontroller::class, 'uploadcountry']);

Route::get('delete/{id}', [Homecontroller::class, 'delete']);

Route::get('update/{id}', [Homecontroller::class, 'update']);

Route::post('updateemployee/{id}', [Homecontroller::class, 'updateemployee']);