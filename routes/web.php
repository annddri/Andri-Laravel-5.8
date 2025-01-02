<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageControllers;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $nama = 'Andri Widani';
//     return view('index', ['nama' => $nama]);
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', [PageControllers::class, 'home']);
Route::get('/about', [PageControllers::class, 'about']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);
Route::resource('students', StudentsController::class);