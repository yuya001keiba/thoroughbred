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

Route::get('/', 'HorsesController@index');

Route::get('search', function () {
    return view('search.index');
});

Route::get('search/auction', function () {
    return view('search.auction');
});

Route::get('search/sire', function () {
    return view('search.sire');
});

Route::get('search/result', function () {
    return view('search.result');
});


Route::get('horse', function () {
    return view('horses.show');
});

Route::get('horse/{id}', 'HorsesController@show');

// horses
Route::get('search/horse', 'SearchController@search')->name('search_horses');

// セリ名
Route::get('search/auction/{id}', 'SearchController@auction')->name('search_horses');

// 種牡馬から探す
Route::get('search/sire/a', 'SearchController@sire');

// 種牡馬から探す　ア～オ
Route::get('search/siresearch', 'SearchController@siresearch');

// カテゴリ 当歳から探すから結果ページへの遷移
Route::get('search/weanling', 'SearchController@weanling')->name('search_horses');

// カテゴリ 1歳から探すから結果ページへの遷移
Route::get('search/yearling', 'SearchController@yearling')->name('search_horses');

// カテゴリ 2歳から探すから結果ページへの遷移
Route::get('search/2-year-old', 'SearchController@juvenile')->name('search_horses');

// カテゴリ 現役馬から探すから結果ページへの遷移
Route::get('search/category/{id}', 'SearchController@category');




// 馬のデータ登録画面
Route::get('insert/horses/import', 'HorsesController@import');

Route::resource('insert/horses','HorsesController');

// セリ馬のデータ登録画面
Route::get('insert/auction_horses', 'AuctionHorsesController@index')->name('auction_horses');
 
Route::post('insert/auction_horses/import', 'AuctionHorsesController@import')->name('auction_horses_import');

// 販売馬のデータ登録画面
Route::get('insert/sale_horses', 'SaleHorsesController@index')->name('sale_horses');
 
Route::post('insert/sale_horses/import', 'SaleHorsesController@import')->name('sale_horses_import');