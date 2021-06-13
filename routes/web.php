<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentsController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/msiswa', [StudentsController::class, 'index']);
Route::get('/msiswa/create', [StudentsController::class, 'create']);
Route::get('/msiswa/{student}', [StudentsController::class, 'show']);
Route::post('/msiswa/s', [StudentsController::class, 'store']);
Route::delete('/msiswa/{student}', [StudentsController::class, 'destroy']);
Route::get('/msiswa/{student}/edit', [StudentsController::class, 'edit']);
Route::put('/msiswa/{student}/p', [StudentsController::class, 'update']);