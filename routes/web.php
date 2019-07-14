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

Route::get('lang/{locale}', 'LocaleController@update')
    ->name('locale')
    ->where('locale', '(en|fr|ar)');
// Further filter in route regex (accepts only English, French and Arabic)

Route::get('/', 'PagesController@index')->name('index');
Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->name('home');
Route::view('about', 'about')->name('about');
Route::view('services', 'services')->name('services');
Route::view('portfolio', 'portfolio')->name('portfolio');
Route::get('blog', 'ArticlesController@index')->name('blog');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', 'ContactController@send')->name('contact');
Route::get('articles', 'ArticlesController@index')->name('articles');
Route::get('articles/{user}', 'ArticlesController@index')->name('articlesBy');
Route::post('subscribe', 'MailingListController@subscribe')->name('subscribe');
Route::get('category/{category}', 'ArticlesController@index')->name('category');
// Wildcard should be the last, this helps for SEO
Route::get('{article}', 'ArticlesController@show')
    ->name('article')->where('article', '^(?!admin)[أ-يa-zA-Z0-9-_]*$');
