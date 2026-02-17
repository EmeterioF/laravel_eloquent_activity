<?php

use App\Http\Controllers\UniversityController;

Route::get('/colleges', [UniversityController::class, 'colleges']);
Route::get('/programs', [UniversityController::class, 'programs']);
Route::get('/levels', [UniversityController::class, 'levels']);
Route::get('/advisers', [UniversityController::class, 'advisers']);
Route::get('/students', [UniversityController::class, 'students']);
Route::get('/records', [UniversityController::class, 'records']);