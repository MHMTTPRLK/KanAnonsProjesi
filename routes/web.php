<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/logout','Auth\LoginController@logout')->name('logout');
/*---------------------*/


/*Route::get('/', ['middleware'=>'guest',function ()
{
    return view('user_dashboard');
}])->name('user-dashboard');*/

Route::group(['middleware' => 'guest'], function (){

    Route::get('/giris', 'Fronted\HomeController@giris')->name('giris');
    Route::get('/kayit', 'Fronted\HomeController@kayit')->name('kayit');


});
Route::get('/ornek', 'Fronted\HomeController@ornekShow')->name('ornek');

Route::get('forget-password', 'Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'Auth\ForgotPasswordController@postEmail')->name('forget-password');
Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword');



Route::group(['middleware' => 'auth'], function (){

    Route::get('/anons-duyuru', 'Fronted\AnonsController@index')->name('anons-duyuru');
    Route::get('/anonslarim/{id}', 'Fronted\AnonsController@show')->name('anonslarim');
    Route::post('/anons-olustur','Fronted\AnonsController@create')->name('anons-olustur');
    Route::post('/anons-update', 'Fronted\AnonsController@anons_Update')->name('anons-update');
    Route::post('/anons-delete', 'Fronted\AnonsController@anons_Delete')->name('anons-delete');
    Route::get('/anons-getdata','Fronted\AnonsController@anonsGetData')->name('anons-getData');
    Route::post('/modalLogin', 'Fronted\AnonsController@modalKontrol')->name('modal-login');
    Route::get('/bilgilerim','Fronted\BilgilerimController@index')->name('bilgilerim');
    Route::post('/bilgi-guncelle/{id}','Fronted\BilgilerimController@update')->name('bilgi-update');
    Route::get('/gonullu-ol', 'Fronted\HomeController@gonulluOl')->name('gonullu-ol');
    Route::post('/gonullu-create', 'Fronted\GonulluController@gonulluCreate')->name('gonullu-create');
});
Route::get('/anons','Fronted\AnonsController@anonsShow')->name('anonsList');
Route::get('/anons-detay/{id}','Fronted\AnonsController@anonsDetay')->name('anonsDetay');
Route::get('/gonulluler','Fronted\GonulluController@index')->name('gonullu');
Route::get('/gonullu-getdata','Fronted\GonulluController@gonulluGetData')->name('gonullu-getData');
Route::get('/gonullu/{id}','Fronted\GonulluController@gonuluShow')->name('gonulluKisi');

Route::post('get-districts-by-city', 'Fronted\HomeController@getDistrict')->name('getDistrict');
Route::post('get-districts', 'Fronted\BilgilerimController@getDistrict')->name('getDistrict1');



Route::get('/', 'Fronted\HomeController@index')->name('home');
Route::get('/hakkında', 'Fronted\HomeController@hakkimizda')->name('hakkimizda');
Route::get('/iletisim', 'Fronted\ContactController@index')->name('iletisim');
Route::post('/iletisim-gec', 'Fronted\ContactController@mesajAt')->name('iletisim-gec');
Route::post('/yorum', 'Fronted\HomeController@yorumYap')->name('yorum');


Route::get('/ip', function (Request $request){

    $IP = $_SERVER['REMOTE_ADDR'];
    //$ipAddress = $request->ip();
    //$macAddress =$request->mac();

    echo $IP;
});

Route::prefix('admin')->name('admin.')->middleware('IsAdmin')->group(function (){

    Route::get('/', 'Back\DashboardController@index')->name('dashboard');

    //Admin Routes Info
    Route::get('/admin-detail', 'Back\AdminController@index')->name('admin-detail');
    Route::post('/admin-update/{id}', 'Back\AdminController@adminUpdate')->name('admin-update');
    //Anons Routes
    Route::get('/anons', 'Back\AnonsController@index')->name('anons-list');
    Route::get('/anons-getdata','Back\AnonsController@anonsGetData')->name('anons-getData');
    Route::get('/anons/anons-detail/{id}', 'Back\AnonsController@anonsShow')->name('anons-detail');
    Route::post('/anons/anons-delete', 'Back\AnonsController@anonsDelete')->name('anons-delete');
    //Gonullu Routes
    Route::get('/gonullu', 'Back\GonulluController@index')->name('gonullu-list');
    Route::post('/gonullu/gonullu-delete', 'Back\GonulluController@gonulluDelete')->name('gonullu-delete');
    Route::get('/gonullu-getdata','Back\GonulluController@userGetData')->name('gonullu-getData');
    //User Routes
    Route::get('/users/list', 'Back\UserController@index')->name('user-list');
    Route::get('/users/user-detail/{id}', 'Back\UserController@userShow')->name('user-detail');
    Route::get('/users/user-edit/{id}', 'Back\UserController@userEdit')->name('user-edit');
    Route::post('/users/user-update/{id}', 'Back\UserController@userUpdate')->name('user-update');
    Route::post('/users/user-delete', 'Back\UserController@userDelete')->name('user-delete');
    Route::get('/user-getdata','Back\UserController@userGetData')->name('user-getData');

    //Contact Route
    Route::post('/contact-delete','Back\ContactController@deleteMsg')->name('deleteMsg');
    Route::get('/contact', 'Back\ContactController@index')->name('contact');
    Route::get('/contact-hardDelete/{id}','Back\ContactController@hardDeleteMsg')->name('hardDelete');
    Route::get('/contact-recover/{id}', 'Back\ContactController@recoverMsg')->name('contact-recoverMsg');
    Route::get('/contact/trashed','Back\ContactController@messageTrashed')->name('contact-trashed');
    Route::get('/contact/getData','Back\ContactController@messageGetData')->name('contact-getData');
    Route::post('/contact/status','Back\ContactController@messageStatus')->name('contact-status');
    //Comment Routes
    Route::get('/comment', 'Back\CommentController@index')->name('comment');
    Route::get('/comment/getData','Back\CommentController@commentGetData')->name('comment-getData');
    Route::get('/comment/switch','Back\CommentController@commentSwitch')->name('comment-switch');
});










