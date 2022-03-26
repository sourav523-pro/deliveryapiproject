<?php

use App\Http\Controllers\EscalationsController;
use App\Http\Controllers\ExceptionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\WeightController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('frontend.home');
})->name('homepage');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/support', function () {
    return view('frontend.support');
})->name('support');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/contacts', function () {
    return view('frontend.contacts');
})->name('contacts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Orders
Route::get('/admin/orders', [OrderController::class, 'index'])->name('backend.order');
Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('backend.order.create');
Route::get('/admin/orders/{orderId}', [OrderController::class, 'editOrder'])->name('backend.order.edit');
Route::post('/admin/orders/store', [OrderController::class, 'store'])->name('backend.order.store');
Route::post('/admin/orders/update', [OrderController::class, 'editOrderPost'])->name('backend.order.update');

// shipment
Route::get('/admin/shipment', [ShipmentController::class, 'index'])->name('backend.shipment');

// Exception
Route::get('/admin/ndr', [ExceptionController::class, 'index'])->name('backend.exception');

// Weight Reco
Route::get('/admin/weight', [WeightController::class, 'index'])->name('backend.weight');

// Escalations
Route::get('/admin/escalations', [EscalationsController::class, 'index'])->name('backend.escalations');



Route::get('/admin/dashboard', [App\Http\Controllers\BackendDasboardController::class, 'index'])->name('backend.dashboard');

Route::get('/admin/settings/main', [App\Http\Controllers\BackendDasboardController::class, 'mainSettings'])
    ->name('backend.main.settings');


Route::get('/admin/shopify/channels', [App\Http\Controllers\ShopifyChannelController::class, 'index'])
    ->name('backend.shopify.channels');


Route::get('/admin/shopify/channel/create', [App\Http\Controllers\ShopifyChannelController::class,
    'create'])
    ->name('backend.shopify.channel.create');
Route::post('/admin/shopify/channel/store', [App\Http\Controllers\ShopifyChannelController::class,
    'store'])
    ->name('backend.shopify.channel.store');
Route::get('/admin/shopify/channel/delete/{id}', [App\Http\Controllers\ShopifyChannelController::class,
    'destroy'])
    ->name('backend.shopify.channel.delete');
Route::get('/admin/shopify/channel/edit/{id}', [App\Http\Controllers\ShopifyChannelController::class,
    'edit'])
    ->name('backend.shopify.channel.edit');
Route::post('/admin/shopify/channel/update', [App\Http\Controllers\ShopifyChannelController::class,
    'update'])
    ->name('backend.shopify.channel.update');
Route::get('/admin/shopify/getOrders', [App\Http\Controllers\ShopifyChannelController::class,
    'getOrders'])
    ->name('backend.shopify.get.orders');


Route::get('/admin/billing/all/', [App\Http\Controllers\BillingController::class,
    'index'])
    ->name('backend.billing.index');

Route::get('/admin/reports/all/', [App\Http\Controllers\ReportController::class,
    'index'])
    ->name('backend.reports.index');
Route::get('/admin/operation/all/', [App\Http\Controllers\NDRController::class,
    'index'])
    ->name('backend.operation.index');
