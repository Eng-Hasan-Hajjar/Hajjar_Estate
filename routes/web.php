<?php

/*
admin routes
|

*/


Route::middleware(['web','admin'])->group(function () {
    
	#datatables
  Route::get('/adminpannel/users/data',['as'=>'adminpannel.users.data','uses'=>'UsersController@anyData']);
  Route::get('/adminpannel/es/data',['as'=>'adminpannel.es.data','uses'=>'EsController@anyData']);

	#main admin
	Route::get('/adminpannel','AdminController@index')->name('adminpannel');

	#users
	Route::resource('/adminpannel/users','UsersController');
	Route::post('/adminpannel/users/changePassword','UsersController@UpdatePassword');
	Route::get('/adminpannel/users/{id}/edit','UsersController@edit');
    Route::get('/adminpannel/users/{id}/delete','UsersController@destroy');

    

    Route::get('/adminpannel/users/create','UsersController@create');
    Route::post('/adminpannel/users/create','UsersController@store');
    
    #sitesetting
    Route::get('/adminpannel/sitesitting','SiteSettingController@index');
    Route::post('/adminpannel/sitesitting','SiteSettingController@store');
    Route::get('/adminpannel/sitting','SittingController@index');

#siteSetting
Route::get('/adminpanel/sitesetting','SiteSettingController@index');
Route::post('/adminpanel/sitesetting','SiteSettingController@store');


    #estates
    Route::get('/adminpannel/es/{id}/edit','EsController@edit');
    Route::resource('/adminpannel/es','EsController');
    Route::get('/adminpannel/es/{id}/delete','EsController@destroy');
    });
/*
users routes
|
*/
Auth::routes();
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('ShowAllBuildingHome','HomeController@showAllEnable');
Route::get('ShowAllBuilding','EsController@showAllEnable');
Route::get('/forRent','EsController@forRent');
Route::get('/forBuy','EsController@forBuy');
Route::get('/forMortgage','EsController@forMortgage');
Route::get('/type/{type}','EsController@showByType');
Route::post('search','EsController@search');
Route::get('search','EsController@search');
Route::get('SingelBuilding/{id}','EsController@showSingle');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/more1', 'HomeController@more1');
Route::get('/more2', 'HomeController@more2');
Route::get('/more3', 'HomeController@more3');


Route::get('/feature1', 'HomeController@feature1');
Route::get('/feature2', 'HomeController@feature2');
Route::get('/feature3', 'HomeController@feature3');


Route::get('/', 'UsersController@welcometoUser');

















Route::get('/user/showuserestate', 'EsController@showuseractiveestate')->middleware('auth');

Route::get('/estateinfo/{id}', 'EsController@estateinfo');

//Route::get('/estateinfo/addimage/{id}', 'EsController@addimage');



Route::get('/user/create/estate', 'EsController@userAddView');
Route::post('/user/create/estate', 'EsController@userStore');

Route::get('/user/showuseractiveestate', 'EsController@showuseractiveestate')->middleware('auth');
Route::get('/user/showuserdeactiveestate', 'EsController@showuserdeactiveestate')->middleware('auth');
Route::get('/nopermition/{id}', 'EsController@nopermition')->middleware('auth');
Route::get('/user/editsetting', 'UsersController@usereditinfo')->middleware('auth');
Route::post('/user/editsetting/{id}', 'UsersController@userupdateprofile')->middleware('auth');
Route::patch('/user/changepassword', 'UsersController@changepassword')->middleware('auth');
Route::get('/user/edit/es/{id}', 'EsController@usereditestate')->middleware('auth');
Route::patch('/user/update/es', 'EsController@userupdateestate')->middleware('auth');

//EState Services
Route::get('/estate/services/{id}', 'EsController@addservices');
Route::post('/estate/services', 'EsController@addservicespost');
//Route::post('imageview/submit','EStateController@upload')->name('upload');



//Contact Routes
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'ContactController@store');

//Gallery Routes
Route::get('/imageview/{id}','ImageController@index');
Route::post('imageview/submit','ImageController@upload')->name('upload');

//About Site
Route::get('/aboutsite','SiteSettingController@aboutsite');
