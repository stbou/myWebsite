<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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


//Route::get('/', [TodoListController::class, 'index']);

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markComplete/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');

//Route::post('/saveItemRoute', [TodoListController::class, 'addUser'])->name('addUser');

// Acces to about Page with the information about the web site
Route::get('/about', function() {
    return view ('about');

});



/*
Route::get('/saveItem', function () {
    return view('welcome');
})->name('saveItem');
*/

