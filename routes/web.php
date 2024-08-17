<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class,"index"]);
Route::get('/sp/{id}', [SiteController::class,"chitietsp"]);
Route::get('/sptheonhasx/{id_nhasx}', [SiteController::class,"sptheonhasx"]);
Route::get('/thongbao', function(){
    return view('thongbao');
});
Route::get('/dssanpham', [SiteController::class,"dssanpham"]);

