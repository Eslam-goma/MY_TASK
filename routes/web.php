<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ShowController;



// namespace App\Http\Controllers;

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
    return view('welcome');
});
//   route resource
// Route::resource('venues', 'VenueController');
// Route::resource('artists', 'ArtistController');
// Route::resource('shows', 'ShowController');
// Route::get('artists/search', 'ArtistsController@search')->name('artists.search');
// Route::get('/artists', 'ArtistController@index')->name('artists.index');

// hard code

Route::get('/venues', [VenueController::class,'index'])->name('venues.index');
Route::get('/venues/create', [VenueController::class,'create'])->name('venues.create');
Route::post('/venues', [VenueController::class,'store'])->name('venues.store');
Route::get('/venues/{venue}', [VenueController::class,'show'])->name('venues.show');
Route::get('/venues/{venue}/edit', [VenueController::class,'edit'])->name('venues.edit'); // Show the venue edit form
Route::put('/venues/{venue}', [VenueController::class,'update'])->name('venues.update'); // Update a venue


Route::get('/artists', [ArtistController::class,'index'])->name('artists.index');
Route::get('/artists/create', [ArtistController::class,'create'])->name('artists.create');
Route::get('/artist/edit/{id}', [ArtistController::class,'edit'])->name('artists.edit');
Route::post('/artist/save/{id}', [ArtistController::class,'save'])->name('artists.save');
Route::post('/artists', [ArtistController::class,'store'])->name('artists.store');
Route::get('/artists/{artist}', [ArtistController::class,'show'])->name('artists.show');
Route::get('/artists/search', [ArtistController::class,'search'])->name('artists.search');
Route::get('/artists/{artist}/edit', [ArtistController::class,'edit'])->name('artists.edit'); // Show the artist edit form
Route::put('/artists/{artist}', [ArtistController::class,'update'])->name('artists.update'); // Update an artist

Route::get('/shows', [ShowController::class,'index'])->name('shows.index');
Route::get('/shows/create', [ShowController::class,'create'])->name('shows.create');
Route::post('/shows', [ShowController::class,'store'])->name('shows.store');
Route::get('/shows/{show}', [ShowController::class,'show'])->name('shows.show');
Route::get('/shows/{show}/edit', [ShowController::class,'edit'])->name('shows.edit'); // Show the show edit form
Route::put('/shows/{show}', [ShowController::class,'update'])->name('shows.update'); // Update a show
