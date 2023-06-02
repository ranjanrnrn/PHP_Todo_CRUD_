<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todolist;
use App\Http\Controllers\TodolistController;
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
// Route::get('/',function(){
//     return view('/todolist/view');
// });
Route::get('/', [TodolistController::class, 'index']);
Route::get('/todolist/create', [TodolistController::class, 'create']); 
Route::get('/todolist/view', [TodolistController::class, 'view']); 
Route::get('/todolist/delete/{id}', [TodolistController::class, 'delete']);
Route::get('/todolist/edit/{id}', [TodolistController::class, 'edit']);
Route::post('/todolist/update/{id}', [TodolistController::class, 'update']);
Route::post('/todolist', [TodolistController::class, 'store']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/todolist', function () {
//     $todolist = Todolist::all();
//     echo "<pre>";
//     print_r($todolist);
// });
