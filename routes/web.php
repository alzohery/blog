<?php

// call back
use App\Http\Controllers\MainBlogController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainBlogController::class, 'testAction']);
