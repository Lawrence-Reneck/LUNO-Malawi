<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\admin_dashboardController;

use App\Http\Controllers\audioController;

use App\Http\Controllers\artistController;


use App\Http\Controllers\home_pageController;

use App\Http\Controllers\newsController;
use App\Http\Controllers\quoteController;

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
Auth::routes();


Route::get('/', [home_pageController::class, 'index']);

Route::get('/admin_dashboard', [admin_dashboardController::class, 'index']);

Route::get('/create_quote', [quoteController::class, 'index']);

Route::post('/post_ajax_quote', [quoteController::class, 'create']);

Route::get('/edit_ajax_quote/{id}', [quoteController::class, 'edit'])->name('quote_edit');

Route::get('/edit_ajax_artist/{id}', [artistController::class, 'edit'])->name('artist_edit');

Route::get('/edit_ajax_song/{id}', [audioController::class, 'edit'])->name('artist_song');

Route::get('/edit_ajax_news/{id}', [newsController::class, 'edit'])->name('news_edit');

Route::post('/update_ajax_news/{id}', [newsController::class, 'update'])->name('news_update');

Route::post('/update_ajax_song/{id}', [audioController::class, 'update'])->name('news_song');

Route::post('/update_ajax_artist/{id}', [artistController::class, 'update'])->name('news_update');

Route::post('/update_ajax_quote/{id}', [quoteController::class, 'update'])->name('quote_update');

Route::get('/delete_news/{id}', [newsController::class, 'delete'])->name('delete_news');

Route::post('/delete_ajax_quote/{id}', [quoteController::class, 'delete'])->name('delete_ajax');

Route::post('/delete_ajax_news/{id}', [newsController::class, 'delete'])->name('delete_ajax'); 

Route::post('/create_artist', [artistController::class, 'create']);

Route::post('/add_audio', [audioController::class, 'create']);

Route::get('/download/{file}',  [audioController::class, 'download']);

Route::get('/show_song/{id}',  [audioController::class, 'show']);

Route::get('/show_artist/{id}',  [artistController::class, 'show']);

Route::post('/create_breaking_news',  [newsController::class, 'create']);

Route::get('/view_breaking_news',  [newsController::class, 'show']);

Route::post('/create_promo',  [artistController::class, 'create_promo']);

Route::get('/delete_song/{id}',  [audioController::class, 'delete_song']);

Route::post('/create_promo_song',  [audioController::class, 'create_promo_song']);

Route::get('/delete_artist/{id}',  [artistController::class, 'delete_artist']);

Route::get('/artists_all',  [artistController::class, 'artists_all']);

Route::post('/search_artist',  [artistController::class, 'search_artist']);

Route::post('/create_legend_artist',  [artistController::class, 'create_legend_artist']);

Route::post('/create_upcoming_artist',  [artistController::class, 'create_upcoming_artist']);

Route::post('/create_upcoming_artist',  [artistController::class, 'create_upcoming_artist']);