<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::pattern('date', '[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])'); //Filter Parameter GET by date yyyy-mm-dd

Route::get('/', [HomeController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('/baju', [ProductsController::class, 'baju']);
    Route::get('/rok', [ProductsController::class, 'rok']);
    Route::get('/sepatu', [ProductsController::class, 'sepatu']);
});

Route::get('/news/{date}', [NewsController::class, 'berita']);

Route::prefix('program')->group(function () {
    Route::get('/baju', [ProductsController::class, 'fashionclass']);
    Route::get('/rok', [ProductsController::class, 'fashionmuseum']);
    Route::get('/sepatu', [ProductsController::class, 'fashioncharity']);
});
   