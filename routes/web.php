<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get("/",[BookController::class,"index"])->name("homepage");
Route::post("/",[BookController::class,"store"])->name("store");
Route::get("/{book_id}/delete/",[BookController::class,"destroy"])->name("remove");
Route::get("/{index}/view/",[BookController::class,"viewPage"])->name("view");


