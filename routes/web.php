<?php

use Illuminate\Support\Facades\Route;

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
//home
Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

//products
Route::get('/products', [\App\Http\Controllers\ProductsController::class,'index'])->name('products');
Route::get('/products/single/{id}', [\App\Http\Controllers\ProductsController::class,'show'])->name('productsSingle');


//contact
Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');

//register
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register');
Route::post('/register',[\App\Http\Controllers\RegisterController::class,'register']);

//login&logout
Route::get('/login',[\App\Http\Controllers\LoginController::class,'loginForm'])->name('loginForm');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('logout');

//cart
Route::middleware([\App\Http\Middleware\IsLogged::class])->group(function () {
    Route::get('/cart',[\App\Http\Controllers\CartController::class,'sendToView'])->name('cart');
   });

Route::get('/cart_items',[\App\Http\Controllers\CartController::class,'AddToCart'])->name('cartItems');
Route::get('/cart_check',[\App\Http\Controllers\CartController::class,'CartCheck'])->name('CartCheck');

//contact
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\ContactController::class,'sendEmail'])->name('sendEmail');

//profile
Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
Route::post('/profile/update',[\App\Http\Controllers\ProfileController::class,'update'])->name('profileUpdate');

//adminPanel
Route::middleware([\App\Http\Middleware\IsAdmin::class])->group(function (){
    Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin');
});

Route::get('/admin/{table}',[\App\Http\Controllers\AdminController::class,'showTable'])->name('showTable');

//brandsTable
//Route::get('/brands/create', [\App\Http\Controllers\BrandsAdminController::class, 'create'])->name('brandsCreate');
//Route::post('/brands/store', [\App\Http\Controllers\BrandsAdminController::class, 'store'])->name('brandsInsert');
//Route::put('/brands/{id}/edit', [\App\Http\Controllers\BrandsAdminController::class, 'edit'])->name('brandsEdit');
//Route::put('/brands/update/{id}', [\App\Http\Controllers\BrandsAdminController::class, 'update'])->name('brandsUpdate');
//Route::delete('/brands/delete/{id}',[\App\Http\Controllers\BrandsAdminController::class, 'destroy'])->name('brandsDelete');

//brands
Route::resource('brands',\App\Http\Controllers\BrandsAdminController::class);

//camera_specs
Route::resource('camera_specs',\App\Http\Controllers\CameraSpecsAdminController::class);

////cart
//Route::resource('cartA',\App\Http\Controllers\CartAdminController::class);

//colors
Route::resource('colors',\App\Http\Controllers\ColorsAdminController::class);

//memory_specs
Route::resource('memory_specs',\App\Http\Controllers\MemorySpecsAdminController::class);

//menus
Route::resource('menus',\App\Http\Controllers\MenusAdminController::class);

//models
Route::resource('models',\App\Http\Controllers\ModelsAdminController::class);

//model_specifications
Route::resource('model_specifications',\App\Http\Controllers\ModelsSpecificationsAdminController::class);

//model_specification_color
Route::resource('model_specification_color',\App\Http\Controllers\ModelsSpecificationColorAdminController::class);

//price
Route::resource('price',\App\Http\Controllers\PriceAdminController::class);

//ram_specs
Route::resource('ram_specs',\App\Http\Controllers\RamSpecsAdminController::class);

//roles
Route::resource('roles',\App\Http\Controllers\RolesAdminController::class);

//users_dva
Route::resource('users_dva',\App\Http\Controllers\UsersDvaAdminController::class);

//images

Route::resource('images',\App\Http\Controllers\ImagesAdminController::class);

//author
Route::get('author',[\App\Http\Controllers\AuthorController::class,'index'])->name('author');
