<?php

use Illuminate\Support\Facades\Route;
use App\Models\DeliveryNote;

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
    return view('welcome');
});

Route::post('/dashboard', [App\Http\Controllers\DeliveryNoteController::class, 'store']
)->middleware(['auth'])->name('deliveryNote.store');

Route::get('/dashboard', function () {
    $deliveryNote = DeliveryNote::latest()->first();

    return view('dashboard', compact('deliveryNote'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
