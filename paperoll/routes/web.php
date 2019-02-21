
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
    Route::get('/','HomeController@index')->name('home');
    Route::get('/home','HomeController@index');
    Route::get('/editor','HomeController@editor');
    Route::get('/contact','HomeController@contact');
    Route::get('/fqa','HomeController@fqa');
    Route::get('/terms','HomeController@terms');
    Route::get('/policy','HomeController@policy');
    Route::post('/sendemail','HomeController@email');
    
    // Route::get('/login','HomeController@login');
    Route::get('/listintrol','HomeController@listintrol');

    Route::get('/test','HomeController@test');
    Route::get('/admin','Admincontroller@index')->name('admin.home');
    Route::get('/login','LoginController@getLogin')->name('login.admin');
    Route::post('login','LoginController@postLogin')->name('postlogin.admin');
    Route::get('logout','HomeController@getLogout');

    Route::group(['middleware'=>'isAdmin', 'prefix'=>'admin'],function(){

        Route::get('/','Admincontroller@index')->name('admin');
        Route::get('/order','Admincontroller@order')->name('order');
            
        Route::group(['prefix'=>'introl'], function(){
            Route::get('danhsach', 'IntrolController@getDanhSach');
            Route::get('edit', 'IntrolController@getEdit');
            Route::get('add', 'IntrolController@getAdd');
            Route::post('add', 'IntrolController@postAdd');

        });
    });
    
    
    // Route::get('','HomeController@getIndex');
    
	Route::get('images-upload', 'HomeController@imagesUpload');
	Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

   

	Route::get('/redirect/{social}', 'SocialAuthController@redirect');
	Route::get('/callback/{social}', 'SocialAuthController@callback');
