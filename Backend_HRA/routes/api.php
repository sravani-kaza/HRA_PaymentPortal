<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LandlordController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->post('/create', 'LandlordController@store');
Route::middleware('api')->get('/getallproperties','PropertyController@indexProperty');
Route::middleware('api')->get('/getproperty/{id}','PropertyController@showProperty');
Route::middleware('api')->get('/getlandlord/{id}','PropertyController@showLandlord');
Route::middleware('api')->get('/getdocuments/{landlord_id}/{property_id}','PropertyController@showDocuments');
Route::middleware('api')->put('/updateproperty/{id}','PropertyController@updateProperty');
Route::middleware('api')->put('/updatelandlord/{id}','PropertyController@updateLandlord');
Route::middleware('api')->put('/updatedocuments/{landlord_id}/{property_id}','PropertyController@updateDocuments');
Route::middleware('api')->post('/posttransaction', 'TransactionController@addtransaction');
Route::middleware('api')->get('/gettransaction/{id}','TransactionController@gettransaction');
Route::middleware('api')->get('/getusertransaction/{id}','TransactionController@getusertransaction');
Route::middleware('api')->get('/getalltransactions','TransactionController@showtransactions');
Route::middleware('api')->post('/checktransaction','TransactionController@checktransaction');
Route::middleware('api')->post('/transaction_response','TransactionController@response');
Route::middleware('api')->post('/getreceipts','AdminController@getreceipts');
Route::middleware('api')->post('/getagreements','AdminController@getagreements');
Route::middleware('api')->post('/pdfgenerate','PdfGenerateController@pdfview');
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
Route::middleware('api')->get('/transaction_status/{id}','TransactionController@retreivetransaction');


