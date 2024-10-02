<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

//Route::get('/', [MainController::class, 'index' ]);

Route::post('changeVersion',[MainController::class,'changeVersion'])->name('changeVersion');


Route::get('/v/{version_id}/{path}', [MainController::class, 'show' ])->name('showPage');





