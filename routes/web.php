<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest work posts',
        'workposts' => [
            [
                'id' => 1,
                'title' => 'Work post One',
                'description' => 'Lorem ipsiom is a great 
                game and there are many spectres to se=arch 
                out for as it is a very welcoming game'
            ],
            [
                'id' => 2,
                'title' => 'Work post Two',
                'description' => 'Lorem ipsiom is a great 
                game and there are many spectres to se=arch 
                out for as it is a very welcoming game'
            ]
        ]
    ]);
});