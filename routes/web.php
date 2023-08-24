<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\Userbackendcontroller;
use App\Http\Controllers\HomeController;


use App\Models\Blogpost;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('main');
//});
Route::get('/admin', function () {
    return view('backend.index');
});
Route::controller(UserController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});
//blog backend
Route::prefix('blogposts')->group(function()
{
Route::get('/index',[BlogpostController::class, 'index'])->name('blog.index');

Route::get('/create',[BlogpostController::class, 'create'])->name('blog.create');

    Route::post('/store',[BlogpostController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit',[BlogpostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}/update',[BlogpostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}/destroy',[BlogpostController::class, 'destroy'])->name('blog.destroy');
});
//frontend
Route::get('/index',[Userbackendcontroller::class, 'index'])->name('user.index');
Route::delete('/{id}/destroy',[Userbackendcontroller::class, 'destroy'])->name('user.destroy');


Route::get('/',[HomeController::class, 'index']);
Route::get('about', function () {
return view('frontend.about');
});
Route::get('/blog', function () {
    return view('frontend.blog');
    });
    Route::get('contact', function () {
        return view('frontend.contact');
        });  
        
        Route::get('/main', function () {
            return view('main');
            });  
             