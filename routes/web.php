<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function(){
    return view('pages.index', [
        'title' => 'Home'
    ]);
})->name('index');


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('pages.categories', [
        'title'         =>  'Posts Category',
        'categories'    =>  Category::all()
    ]);
})->name('categories');

// CATATAN BUAT SATU MODELS SATU CONTROLL

// DASHBOARD
Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' =>  'Dashboard'
    ]);
})->middleware('auth');

// jalankan route untuk crud, gc bisa pakai binding
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// Route login dan registrasi
// guest jika belum login
// auth sudah melakukan login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authneticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// menerima request dari url
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// menangkap data dari form dengan method nya post
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug']);