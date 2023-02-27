<?php

use App\Models\BidMng;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ToController;

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

//Common Resouce Routes:
// index - show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing 
// update - update listing
// destroy - delete listing

// Main Index
Route::get('/', [BidController::class, 'index']);

//show addd bid form
Route::get('/addBid', [BidController::class, 'create']);
//store listing data
Route::post('/addBid/perform', [BidController::class, 'store']);


//show largest page
Route::get('/largestBid', [BidController::class, 'showLargest']);

//show edit list
Route::get('/company/{item}/edit', [BidController::class, 'edit']);
//perform update 
Route::put('/company/{item}/edit/perform', [BidController::class, 'update']);

//perform destroy
Route::delete('/company/{item}/delete', [BidController::class, 'destroy']);

//show to sample temp / create
Route::get('/addTo', [ToController::class, 'create']);
//store new to
Route::post('/addTo/create', [ToController::class, 'store']);


//tester page
Route::get('/test', function(){
    $bid = BidMng::orderBy('bid', 'desc')->get();
    $highestbid = BidMng::max('bid');
    $bidCount = $bid->count();
    return view('test', [
        'bid' => $bid,
        'bidCount' => $bidCount,
        'highestbid' => $highestbid
    ]);
});



