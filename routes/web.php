<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///department
Route::get('/backend/manage-department', [\App\Http\Controllers\backend\department\DepartmentController::class, 'index'])->name('backend.manage-department');
///lawyers
Route::get('/backend/manage-lawyers', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'index'])->name('backend.manage-lawyers');
Route::get('/backend/lawyer-create', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'create'])->name('backend.lawyer-create');
Route::post('/backend/lawyer-store', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'store'])->name('backend.lawyer-store');
Route::get('/backend/lawyer-edit/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'edit'])->name('backend.lawyer-edit');
Route::post('/backend/lawyer-update/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'update'])->name('backend.lawyer-update');
Route::post('/backend/lawyer-delete/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'delete'])->name('backend.lawyer-delete');
