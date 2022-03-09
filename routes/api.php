<?php

use App\Http\Controllers\API\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('v1/add-student', [StudentController::class, 'store'] );
Route::get('v1/students', [StudentController::class, 'index'] );
Route::get('v1/edit-student/{id}', [StudentController::class, 'edit'] );
Route::put('v1/update-student/{id}', [StudentController::class, 'update'] );
Route::delete('v1/delete-student/{id}', [StudentController::class, 'destroy'] );


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
