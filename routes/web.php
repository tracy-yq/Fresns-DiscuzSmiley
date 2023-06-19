<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Support\Facades\Route;
use Plugins\DiscuzSmiley\Http\Controllers\AdminController;

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

Route::name('admin.')->prefix('admin')->middleware(['web', 'panelAuth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('smiley', [AdminController::class, 'smiley'])->name('smiley');

    Route::post('import', [AdminController::class, 'import'])->name('import');
    Route::put('update', [AdminController::class, 'update'])->name('update');
});
