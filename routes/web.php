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

/*
One to One
 */
Route::get('one-to-one', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
Route::get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

/*
One to Many
 */
Route::get('one-to-many', 'OneToManyController@oneToMany');
Route::get('many-to-one', 'OneToManyController@manyToOne');
Route::get('one-to-many-two', 'OneToManyController@oneToManyTwo');
Route::get('one-to-many-insert', 'OneToManyController@oneToManyInsert');
Route::get('one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo');

/*
* Has many Through
 */
Route::get('has-many-through', 'OneToManyController@hasManyThrough');

/*
* Many to Many
 */
Route::get('many-to-many', 'ManyToManyController@manyToMany');

Route::get('/', function () {
    return view('welcome');
});
