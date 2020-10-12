<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'DashboardController@index')->name('dashboard.index');

// Data Master
Route::resource('clients', 'ClientController');
Route::resource('insurance', 'InsuranceController');
Route::resource('cover_type', 'CoverTypeController');
Route::resource('authorize_sign', 'AuthorizeSignController');
Route::resource('currency', 'CurrencyController');
Route::resource('account', 'AccountController');

// Placing Slip
Route::resource('placing', 'PlacingSlipController');
Route::get('placing/{id}/makeps', 'PlacingSlipController@makeps')->name('placing.makeps');
Route::get('placing/{id}/set-status', 'PlacingSlipController@setStatus')->name('placing.status');

// Quotation Slip
Route::resource('quotation', 'QuotationSlipController');
Route::get('quotation/{id}/qs', 'QuotationSlipController@qs')->name('quotation.qs');
Route::get('quotation/{id}/set-status', 'QuotationSlipController@setStatus')->name('quotation.status');


// Instruct Cover
Route::resource('instruct', 'InstructCoverController');
Route::get('instruct/{id}/ic', 'InstructCoverController@create_ic')->name('instruct.ic');
// Invoice
Route::resource('invoice', 'InvoiceController');
Route::get('invoice/{id}/invoice', 'InvoiceController@create_invoice')->name('invoice.make');
Route::get('invoice/{id}/set-status', 'InvoiceController@setStatus')->name('invoice.status');
Route::get('invoice/{id}/print', 'InvoiceController@print')->name('invoice.print');
Route::get('invoice/{id}/review', 'InvoiceController@review')->name('invoice.review');




