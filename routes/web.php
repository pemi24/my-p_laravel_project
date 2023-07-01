<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class,'homepage']);

Route::get('/user/create', [HomeController::class,'create']);

Route::get('/user/', [HomeController::class,'index']);

Route::get('/home/about', [HomeController::class,'about']);
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/user/create', [HomeController::class, 'create'])->middleware('guest');

Route::get('/user/layout', [HomeController::class, 'start'])->name('layout');

Route::get('/admin/layout', [ContactController::class, 'adminlayout'])->name('layout');

route::get('/user/index',[HomeController::class,'index'])->middleware('auth')->name('index');

route::post('/admin/messages',[ContactController::class,'index'])->middleware('auth')->name('messages');

route::post('/admin/mine',[ContactController::class,'mine'])->middleware('auth')->name('mine');

route::get('/admin/contactus',[ContactController::class,'contact'])->name('contactus');

route::get('/user/edit',[HomeController::class,'edit'])->middleware(['auth','admin']);

/*Route::get('/user/{userId}/', [HomeController::class, 'downloadUser']);
*/
Route::middleware('auth')->group(function () {
    //Regular User profile Routes 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::resource("/user", HomeController::class);

Route::resource("/admin", ContactController::class);

require __DIR__.'/auth.php';
