<?php


Auth::routes();

// Home
Route::get('/', 'LedgerController@all_ledgers');


// Route for adding new particular
Route::get('/add_particular', function () {
        return view('intenals.create');
})->middleware('auth');
Route::post('/add_particular', 'LedgerController@create_ledger');

// Route for editing a particular
Route::get('/edit_particular/{id}', 'LedgerController@edit_ledger');
Route::put('/edit_particular/{id}', 'LedgerController@update_ledger');

// Route for deleting a particular
Route::delete('/delete_particular/{id}', 'LedgerController@delete_ledger');

// Route for viewing reports
Route::get('/overall_reports', 'LedgerController@overall_report')->name('reports');
Route::get('/download_report', 'LedgerController@downloadReport')->name('download.report');