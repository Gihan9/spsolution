<?php

use App\Http\Controllers\DeliveryController;
use App\Models\Delivery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('delivery');
});

Route::get('/delivery',[DeliveryController::class,'deliveryget']);
Route::post('/delivery-data',[DeliveryController::class,'deliverystore'])->name('delivery-data');

Route::get('/deliverydata',[DeliveryController::class,'deliverydata']);

Route::post('/deliverydelete',[DeliveryController::class,'deliverydelete']);



