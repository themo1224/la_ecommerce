<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class,'redirect' ]);
Route::get('/', [HomeController::class,'index' ]);
Route::get('/view_category', [\App\Http\Controllers\AdminController::class,'view_category' ]);
Route::get('/delete_category/{id}', [\App\Http\Controllers\AdminController::class,'delete_category' ]);
Route::post('/add_category', [\App\Http\Controllers\AdminController::class,'add_category' ]);

Route::get('/view_product', [\App\Http\Controllers\AdminController::class,'view_product' ]);

Route::post('/add_product', [\App\Http\Controllers\AdminController::class,'add_product' ]);
Route::get('/show_product', [\App\Http\Controllers\AdminController::class,'show_product' ]);
Route::get('/delete_product/{id}', [\App\Http\Controllers\AdminController::class,'delete_product' ]);
Route::get('/update_product/{id}', [\App\Http\Controllers\AdminController::class,'update_product' ]);
Route::post('/update_product_confirm/{id}', [\App\Http\Controllers\AdminController::class,'update_product_confirm' ]);

Route::get('/product_details/{id}', [\App\Http\Controllers\HomeController::class,'product_details' ]);


Route::get('/add_cart', [\App\Http\Controllers\HomeController::class,'add_cart' ]);


