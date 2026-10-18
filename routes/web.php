<?php

use App\Http\Controllers\InstrumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [InstrumentController::class, 'home']);

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/katalog', [InstrumentController::class, 'index'])->name('instrument.index');
Route::get('/katalog/{id}', [InstrumentController::class, 'show'])->name('instrument.show');

Route::get('/contact', function () {
    return view('page.contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'message' => 'required|string|max:1000',
    ]);

    return redirect('/contact')->with('success', 'Terima kasih, pesanmu sudah kami terima. Kami akan segera menghubungimu.');
});