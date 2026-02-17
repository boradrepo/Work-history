<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-role-user', [TestController::class, 'index']);
Route::get('fetch-data', [TestController::class, 'fetchData']);
