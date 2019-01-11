<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//const api = {
//    Login: '/auth/login',
//    Logout: '/auth/logout',
//    ForgePassword: '/auth/forge-password',
//    Register: '/auth/register',
//    SendSms: '/account/sms',
//    SendSmsErr: '/account/sms_err',
//    // get my info
//    UserInfo: '/user/info'
//}
//export default api

Route::namespace('Api')->group(function () {
    Route::post('auth/login', 'AuthController@login');
    Route::post('auth/logout', 'AuthController@logout');
    Route::get('user/info', 'UserController@info');
    Route::get('role', 'RoleController@index');
    Route::get('service', 'ServiceController@index');
});
