<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

 route::get('/home', ['homeController::class', 'index'])->name('home.index');



// Route::get('/', function () {
//     return view('HomePage');
// });


// Route::get('/About', function () {
//     return view('AboutPage');
// });

// Route::get('/Contact', function () {
//     return view('contactPage');
// });
