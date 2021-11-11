<?php
// routes to the controller class that links it directly to the pages.
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// a route that makes the dashboard page your main page, and a route to the controller that displays the content.
Route::middleware(['auth:sanctum', 'verified'])->get('/', [PostController::class, 'index'], function () {
    return view('dashboard');
})->name('dashboard');

// a route to save the data form the form with a connection to a controller that sends the data to the database
Route::post('store-form', [PostController::class, 'store']);

// a route the page where the results are shown.
Route::middleware(['auth:sanctum', 'verified'])->get('/results', function () {
    return view('results');
})->name('results');
