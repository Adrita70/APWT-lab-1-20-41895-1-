<?php

use App\Http\Controllers;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'home']);
Route::get('/home',[PagesController::class,'home']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/ourteams',[PagesController::class,'ourteams']);
Route::get('/product',[ProductController::class,'list']);
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/details/{id}/{name}',[ProductController::class,'product'])->name('product.details');
