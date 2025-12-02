<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/faq/create', [HomeController::class, 'faq_create'])->name('faq.create');
Route::post('/testimonial/create', [HomeController::class, 'testimonial_create'])->name('testimonial.create');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/repertoire', [HomeController::class, 'repertoire'])->name('repertoire');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/adminaccount', [HomeController::class, 'myAccount']);
Route::post('updateaccount', ['as' => 'UpdateDetails.account', 'uses' => 'HomeController@updateAccount']);
Route::post('changepassword', ['as' => 'ChangePassword.account', 'uses' => 'HomeController@changePassword']);
Route::get('/admin/faq', [HomeController::class, 'admin_faq'])->name('admin.faq');
Route::get('/admin/faq/{id}', [HomeController::class, 'faq_edit'])->name('faqs.edit');
Route::put('/admin/faq/{id}', [HomeController::class, 'faq_update'])->name('faqs.update');
Route::get('/admin/insta', [HomeController::class, 'admin_insta'])->name('admin.insta');
Route::get('/admin/insta/{id}', [HomeController::class, 'insta_edit'])->name('insta.edit');
Route::put('/admin/insta/{id}', [HomeController::class, 'insta_update'])->name('insta.update');
Route::get('/admin/testimonials', [HomeController::class, 'admin_testimonials'])->name('admin.testimonials');
Route::get('/admin/testimonial/{id}', [HomeController::class, 'testimonial_edit'])->name('testimonial.edit');
Route::put('/admin/testimonial/{id}', [HomeController::class, 'testimonial_update'])->name('testimonial.update');

Route::get('/admin/videos', [HomeController::class, 'admin_videos'])->name('admin.videos');
Route::get('/admin/video/{id}', [HomeController::class, 'video_edit'])->name('video.edit');
Route::put('/admin/video/{id}', [HomeController::class, 'video_update'])->name('video.update');
Route::delete('/admin/video/{id}/delete', [HomeController::class, 'video_delete'])->name('video.delete');
Route::patch('/admin/video/{id}/restore', [HomeController::class, 'video_restore'])->name('video.restore');


Route::get('/admin/{page}/edit', [HomeController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{page}', [HomeController::class, 'update'])->name('admin.update');
