<?php

use App\Http\Livewire\Post\Blog;
use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Post\ShowPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AboutUs;
use App\Models\Post;

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

/* Terms and Conditions, Privacy Policy */
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', Index::class)->name('home');
Route::get('/about', AboutUs::class);
Route::get('/blog', Blog::class);
Route::get('/{post:slug}', ShowPost::class)->name('show');
Route::get('admin/login', fn() => redirect('login') )->name('filament.auth.login');
