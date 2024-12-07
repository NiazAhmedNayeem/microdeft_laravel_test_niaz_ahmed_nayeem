<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///department
Route::get('/backend/manage-department', [\App\Http\Controllers\backend\department\DepartmentController::class, 'index'])->name('backend.manage-department');
///lawyers
Route::get('/backend/manage-lawyers', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'index'])->name('backend.manage-lawyers');
Route::get('/backend/lawyer-create', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'create'])->name('backend.manage-create');
Route::post('/backend/lawyer-store', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'store'])->name('backend.manage-store');
Route::get('/backend/lawyer-edit/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'edit'])->name('backend.manage-edit');
Route::post('/backend/lawyer-update/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'update'])->name('backend.manage-update');
Route::post('/backend/lawyer-delete/{id}', [\App\Http\Controllers\backend\lawyers\LawyerController::class, 'delete'])->name('backend.manage-delete');
