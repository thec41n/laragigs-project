<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/hello', function() {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('andi', 'kunyit');
// });

// Route::get('/posts/{id}', function($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return ($request->name . ' ' . $request->city);//$request->name . ' ' . $request->city
// });
