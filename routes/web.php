<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Test;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Post;
use App\Http\Livewire\Contacts;
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
//Autentifikace uživatele
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
});
//Route stránek
//Route::view('/dash', 'dashboard');
//Route::get('/test', Test::class);
Route::view('/', 'index');
Route::view('/backend', 'backend');
Route::view('/ux-ui-design', 'uxuidesign');
Route::view('/kontakty', 'contacts');
Route::get('/kontakty', Contacts::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{post}',Post::class);