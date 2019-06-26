<?php


Auth::routes();

// Route to the home page of the tracking system
// User must be authenticated

// Route::get('/', function (){
//         return view('workspace');
// })->middleware('auth');

Route::get('/', 'LedgerController@all_ledgers');


// Route for adding new particular
Route::get('/add_particular', function () {
        return view('intenals.create');
})->middleware('auth');
Route::post('/add_particular', 'LedgerController@create_ledger');