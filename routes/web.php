<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

//Login Controller
Route::get('login',[HomeController::class,'index'])->name('login');
Route::post('store',[HomeController::class,'store'])->name('store');

//Dashboard
Route::get('dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('logout',[HomeController::class,'logout'])->name('logout');

//changepass
Route::get('changepass',[HomeController::class,'changepass'])->name('changepass');
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');

//Category Product
Route::get('category',[CategoryController::class,'index'])->name('show.category');
Route::post('category/add',[CategoryController::class,'create'])->name('category.add');
Route::get('category.edit/{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
Route::post('category.update/{id}',[CategoryController::class,'categoryupdate'])->name('category.update');
Route::get('category.delete/{id}',[CategoryController::class,'categorydelete'])->name('category.delete');

//Subcategory Product
Route::get('subcategory',[SubcategoryController::class,'index'])->name('show.subcategory');
Route::post('subcategory',[SubcategoryController::class,'addsubcategory'])->name('add.subcategory');
Route::get('subcategories/{subcategory}/edit',[SubcategoryController::class,'editsubcategory'])->name('edit.subcategory');
Route::post('subcategory.update/{id}',[SubcategoryController::class,'subcategoryupdate'])->name('subcategory.update');
Route::get('subcategory/destroy/{id}', [SubcategoryController::class,'delete'])->name('delete');





//Product
Route::get('product/',[ProductController::class,'product'])->name('product');
Route::get('get-states/{category_id}', [ProductController::class,'getProduct']);
Route::post('productstore', [ProductController::class,'productadd'])->name('productadd');

//product edit

Route::get('productedit/{id}',[ProductController::class,'productedit'])->name('productedit');
Route::post('productupdate/{id}',[ProductController::class,'productupdate'])->name('productupdate');
Route::get('product/destroy/{id}', [ProductController::class,'delete'])->name('delete');