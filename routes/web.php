<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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

//End point of / and passing a function that return view of home <using function>
// Route::get('/', function () {
//     return view('home');
// });

//Laravel 8 - We have an endpoint /products, and we pass a controller and perform index function in the controller class <using controller>
// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/about',[ProductsController::class, 'about']);

//Laravel 8 - go to the selected path and use index function (separated by file@function)<using path>
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Grab the id and pass it to the controller class, function show
//Make sure it is only an integer using regex ->where('grabbed variable',regex)
// Route::get('/products/{name}', 
//     [ProductsController::class, 'show'])->where('name', '[0-9]+');
// Route::get('/products/{name}/{id}', 
//     [ProductsController::class, 'show'])->where([
//         'name' => '[a-z]+',
//         'id' => '[0-9]+'
//     ]);

//Named routes
//Route::get('/products',[ProductsController::class, 'show_index'])->name('products');

Route::get('/',[PagesController::class,'showIndex']);

Route::get('/register',[PagesController::class,'showRegister']);
Route::get('/login', [PagesController::class,'showLogin']);

Route::get('/insert_product', [PagesController::class,'showInsertProduct']);
Route::get('/edit_product', [PagesController::class,'showEditProduct']);

Route::get('/testing', [PagesController::class,'showTest']);

//Categories
Route::get('/category/edit/{id}', [CategoriesController::class,'showEditCategory']);
Route::put('/category/edit/{id}', [CategoriesController::class,'update']);
Route::delete('/category/delete/{id}', [CategoriesController::class,'delete']);
Route::get('/category/insert', [CategoriesController::class,'showInsertCategory']);
Route::post('/category/insert', [CategoriesController::class,'store']);
Route::get('/category', [CategoriesController::class,'showManageCategory']);

Route::get('/view_product_list', [PagesController::class,'showViewProductList']);

Route::get('/DetailProductPage', [PagesController::class,'showDetailProductPage']);

Route::get('/history', [PagesController::class,'showHistory']);

Route::get('/home', [ProductsController::class,'showHome'])->name('home');
Route::get('/search', [PagesController::class,'showSearch']);

Route::get('/cart', [PagesController::class,'showCart']);
Route::get('/edit_cart', [PagesController::class,'showEditCart']);

// Database testing
Route::resource('/users', UsersController::class);

Auth::routes();
