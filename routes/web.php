<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Page\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Setting\ContactFormController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Setting\AddressController;
use App\Models\Page;


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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('contact-form/submit-data', [ContactFormController::class, 'ajax_submit_data'])->name('contact_form.submit_data');


//loading
Route::post('ajax-get-program-by-institute', [HomeController::class, 'ajax_get_program_by_institute'])->name('ajax_get_program_by_institute');
Route::post('ajax-get-state-by-country', [HomeController::class, 'ajax_get_state_by_country'])->name('ajax_get_state_by_country');
Route::post('ajax-get-book-list-by-category', [HomeController::class, 'ajax_get_book_list_by_category'])->name('ajax_get_book_list_by_category');


Route::get('/p/{page}/{slug1?}/{slug2?}/{slug3?}', [PagesController::class, 'show_custom_page'])->name('custom-pages.show_custom_page');
Route::get('/b/{slug}', [PostController::class, 'show_custom_blogs'])->name('blogs.show_blog');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
