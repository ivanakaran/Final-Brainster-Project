<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CoursesController;
use Psy\TabCompletion\AutoCompleter;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

// Social Login with socialiate
Route::get('login/{provider}', [SocialController::class, 'redirect']);
Route::get('login/{provider}/callback', [SocialController::class, 'Callback']);

// Course Controller
Route::resource('courses', CoursesController::class);
Route::put('course/{id}/approve', [CoursesController::class, 'approve'])->name('approve');
Route::put('course/{id}/reject', [CoursesController::class, 'reject'])->name('reject');


// Likes Controller
Route::get('/course/like/{id}', [LikesController:: class, 'like'])->name('course.like');
Route::get('/course/unlike/{id}', [LikesController:: class, 'unlike'])->name('course.unlike');

// Admin Controller
Route::group(['middleware' => ['admin']], function () {
    Route::resource('admins', AdminController::class);
    Route::get('approved', [AdminController::class, 'approved'])->name('admin.approved');
    Route::get('unapproved', [AdminController::class, 'unapproved'])->name('admin.unapproved');
    Route::get('delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
  
});

// Pages Controller
Route::get('/', [PagesController::class, 'programming'])->name('home');
Route::get('/data-science', [PagesController::class, 'dataScience'])->name('data-science');
Route::get('/devops', [PagesController::class, 'devOps'])->name('dev-ops');
Route::get('/design', [PagesController::class, 'design'])->name('design');
Route::get('tutorials/{slug}', [PagesController::class, 'show'])->name('tutorials.show');



// Autocomplete 
Route::post('/autocomplete/fetch', [AutocompleteController::class, 'fetch'])->name('autocomplete.fetch');
Route::get('/live_search/programming', [AutocompleteController::class, 'searchProgramming'] )->name('search.programming');
Route::get('/live_search/data-science', [AutocompleteController::class, 'searchDataScience'] )->name('search.data-science');
Route::get('/live_search/devops', [AutocompleteController::class, 'searchDevOps'] )->name('search.devops');
Route::get('/live_search/design', [AutocompleteController::class, 'searchDesign'] )->name('search.design');





