<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\SaveLabel;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Livewire\UserListComponent;
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
    // return view('welcome');
    return redirect('dashboard');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', IndexComponent::class)->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/save', SaveLabel::class)->name('save');
Route::middleware(['auth:sanctum', 'verified'])->get('/generatepdf/{id}', [App\Http\Controllers\GeneratePDFController::class, 'generate'])->name('generatepdf');

Route::middleware(['auth:sanctum', 'admin'])->get('/users', UserListComponent::class)->name('users');
