<?php

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

use App\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{slug}', 'NewsController@show')->name('news.show');
Route::get('/albums', 'AlbumController@index')->name('albums');
Route::get('/albums/{id}', 'AlbumController@show')->name('albums.show');
Route::get('/videos', 'VideoController@index')->name('videos');
Route::post('/contact', 'ContactFormController@store')->name('contact.store');
Route::view('/afaa', 'afaa')->name('afaa');
Route::get('/judges', 'JudgeController@index')->name('judges');

// Registration Routes
Route::get('/registration', 'ApplicantController@index')->name('register.index');
Route::post('/registration/store', 'ApplicantController@store')->name('register.store');
// Route::get('/registration/attachments/{id}', 'ApplicantController@showAttachment')->name('attachment.show');
// Route::post('/registration/attachments/upload', 'ApplicantController@uploadAttachment')->name('attachment.upload');

$routes = Category::where('status', 1)->get();

foreach ($routes as $route) {
    Route::get($route->route.'/{id}', 'InstructionController@show')->name($route->route);
}

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
