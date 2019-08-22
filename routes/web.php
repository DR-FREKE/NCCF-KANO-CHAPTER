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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', 'loginController@isLoggedIn');

//user view controller
Route::get('/', 'UserController@welcome');
Route::get('/blog', 'UserController@blogTopic');
Route::get('/about', 'UserController@aboutPage');
Route::get('/makepayment', 'UserController@payment');
Route::get('/testimony', 'UserController@testimony');
Route::get('/contact-us', 'UserController@contactUs');
Route::get('/prayer-request', 'UserController@prayerRequest');
Route::get('/executives', 'UserController@executives');
Route::get('/events', 'UserController@events');
Route::get('/userEvent', 'UserController@getUserEvent');
Route::delete('/userEvent', 'UserController@deleteEvent');
Route::get('/audio', 'UserController@audioStore');
Route::get('/video', 'UserController@videoStore');
Route::get('/gallery', 'UserController@galleryStore');
Route::post('/contact-us', 'UserController@userSubscribe');
Route::post('/contact', 'UserController@contactMessage');
Route::post('/testimony', 'UserController@userTestimony');
Route::post('/prayer', 'UserController@userPrayerRequest');
Route::get('/membership', 'UserController@membership');
Route::post('/nccfmember', 'UserController@addMemberShip');
Route::get('/viewmembers', 'UserController@viewMembers');
Route::get('/viewmemberTestimony', 'UserController@viewTestimony');

//admin view controller
Route::post('/admin', [
    'uses'=>'loginController@isLoggedIn',
    'as'=>'login.custom'
])->middleware('userauth');
Route::post('/mLogout', 'loginController@isLoggedOut');

Route::group(['middleware'=>['admin']], function(){
    Route::get('/addstore', 'AdminController@addStore');
    Route::get('/addblog', 'AdminController@addBlog');
    Route::get('/addSubAdmin', 'AdminController@addSubAdmin');
    Route::get('/addevent', 'AdminController@addEvent');
    Route::get('/getevent', 'AdminController@getEvent');
    Route::get('/newsletter', 'AdminController@newsLetter');
    Route::get('/getSubscribers', 'AdminController@getSubscribers');
    Route::post('/getSubscribers', 'AdminController@sendSubscribersMail');
    Route::delete('/addSubAdmin', 'AdminController@deleteSubAdmin');
});

Route::group(['middleware'=>['subadmin']], function(){
    Route::get('/prayerRequest', 'SubAdminController@getPrayer');
    Route::get('/viewTestimony', 'SubAdminController@getTestimony');
    Route::get('/genco', 'SubAdminController@genco');
    Route::post('/gencoHandler', 'SubAdminController@sendToGenco');
    Route::get('/dailyPost', 'SubAdminController@dailyPost');
    Route::post('/dailyPost', 'SubAdminController@sendPost');
    Route::post('/enterNewDeligate', 'SubAdminController@newDeligate');
    Route::get('/editGencoDeligates', function(){
        return view('editGencoDeligates');
    });
    Route::get('/viewDeligates', 'SubAdminController@viewDeligate');
    Route::get('/enterNewDeligates', function(){
        return view('enterNewDeligates');
    });
    Route::get('/searchDeligate', function(){
        return view('searchDeligate');
    });
    Route::get('/deleteDeligates', function(){
        return view('deleteDeligates');
    });
    Route::delete('/deleteDel', 'SubAdminController@removeAllDeligate');
    Route::put('/updateTestimony', 'SubAdminController@updateTestimony');
    Route::get('/executiveLouge', 'SubAdminController@');
});
Route::post('/addSubAdmin', 'RegisterUsers@addSubAdmin');

Route::post('/addblog', 'AdminController@postBlog');
Route::post('/addevent', 'AdminController@postEvent');
// Route::get('/file', function(){
//     Storage::disk('local')->put('file.txt', 'Contents');
// });

Route::get('/error', 'AdminController@errorHandler');
Route::get('/addAdmin', 'RegisterUsers@addAdmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
