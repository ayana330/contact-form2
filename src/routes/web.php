<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Models\Contact;
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

Route::get('/',[ContactController::class, 'list']);
Route::get('/contacts/form',[ContactController::class, 'index']);

Route::POST('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts',[ContactController::class,'store']);
