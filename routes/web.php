<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get("login", function () {
    return view('admin.login');
});

Route::get(
    '/',
    [HomeController::class, 'index']
);

Route::post(
    '/store',
    [HomeController::class, 'store']
);

Route::post(
    '/store/{id}',
    [HomeController::class, 'update']
);

Route::get(
    '/store/{id}',
    [HomeController::class, 'destroy']
);

// Route::get('/', function () {
//     return view('welcome');
// });
