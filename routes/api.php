<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Todolist API routes

Route::get('/todolists', [App\Http\Controllers\TodolistsController::class, "index"])->name("todolist");
Route::post('/todolists/add-list', [App\Http\Controllers\TodolistsController::class, "create"])->name("add-todolist");
Route::post('/todolists/store/{todolist}', [App\Http\Controllers\TodolistsController::class, "store"])->name("store-todolist");
Route::get('/todolists/show/{todolist}', [App\Http\Controllers\TodolistsController::class, "show"])->name("show-todolist");
Route::put('/todolists/update-list/{todolist}', [App\Http\Controllers\TodolistsController::class, "update"])->name("update-todolist");
Route::delete('/todolists/delete-list/{todolist}', [App\Http\Controllers\TodolistsController::class, "delete"])->name("delete-todolist");


//Categories API routes

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, "index"])->name("category");
Route::post('/categories/add-category', [App\Http\Controllers\CategoriesController::class, "create"])->name("add-category");
Route::post('/categories', [App\Http\Controllers\CategoriesController::class, "store"])->name("store-category");
Route::get('/categories/show/{category}', [App\Http\Controllers\CategoriesController::class, "show"])->name("show-category");
Route::put('/categories/update-category/{category}', [App\Http\Controllers\CategoriesController::class, "update"])->name("update-category");
Route::delete('/categories/delete-category/{category}', [App\Http\Controllers\CategoriesController::class, "delete"])->name("delete-category");

//Sidequest API routes

Route::get('/sidequests', [App\Http\Controllers\SidequestsController::class, "index"])->name("sidequest");
Route::post('/sidequests/add-sidequest', [App\Http\Controllers\SidequestsController::class, "create"])->name("add-sidequest");
Route::post('/sidequests', [App\Http\Controllers\SidequestsController::class, "store"])->name("store-sidequest");
Route::get('/sidequests/show/{sidequest}', [App\Http\Controllers\SidequestsController::class, "show"])->name("show-sidequest");
Route::put('/sidequests/update-sidequest/{sidequest}', [App\Http\Controllers\SidequestsController::class, "update"])->name("update-sidequest");
Route::delete('/sidequests/delete-sidequest/{sidequest}', [App\Http\Controllers\SidequestsController::class, "delete"])->name("delete-sidequest");

//Weekdayloop API routes

Route::get('/weekdayloops', [App\Http\Controllers\WeekdayloopsController::class, "index"])->name("weekdayloop");
Route::post('/weekdayloops/add-weekdayloop', [App\Http\Controllers\WeekdayloopsController::class, "create"])->name("add-weekdayloop");
Route::post('/weekdayloops', [App\Http\Controllers\WeekdayloopsController::class, "store"])->name("store-weekdayloop");
Route::get('/weekdayloops/show/{weekdayloop}', [App\Http\Controllers\WeekdayloopsController::class, "show"])->name("show-weekdayloop");
Route::put('/weekdayloops/update-weekdayloop/{weekdayloop}', [App\Http\Controllers\WeekdayloopsController::class, "update"])->name("update-weekdayloop");
Route::delete('/weekdayloops/delete-weekdayloop/{weekdayloop}', [App\Http\Controllers\WeekdayloopsController::class, "delete"])->name("delete-weekdayloop");
