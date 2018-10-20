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

Route::get('/',"articleController@index")->name('article.index');

//Route::get|any("访问目录","控制器@方法")->name("访问名称")指代 {{route("article.add")}}
Route::get("article/article/{id}","articleController@ac")->name('article.articleClass');
Route::get("article/adm","articleController@adm")->name('article.adm');
Route::any("article/edit/{id}","articleController@edit")->name('article.edit');
Route::get("article/del/{id}","articleController@del")->name('article.del');
Route::any("article/add","articleController@add")->name('article.add');


Route::get("ArticleClass/index","articleClassController@index")->name('ArticleClass.index');
Route::any("ArticleClass/add","articleClassController@add")->name('Class.add');
Route::get("ArticleClass/del/{id}","articleClassController@del")->name('Class.del');
Route::any("ArticleClass/edit/{id}","articleClassController@edit")->name('Class.edit');