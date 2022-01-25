<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// use App\Job;

/*
|--------------------------------------------------------------------------|
|                               API Routes                                 |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register API routes for your application. These    |
| routes are loaded by the RouteServiceProvider within a group which       |
| is assigned the "api" middleware group. Enjoy building your API!         |
|--------------------------------------------------------------------------|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/v1/jobs', [JobController::class, 'listjobs']); //lista jobow


Route::post('/register', [AuthController::class, 'register']); //rejestracja usera


Route::post('/login', [AuthController::class, 'login']); //login user


Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum'); //fetch current user, jedynie dla autoryzowanych 


Route::get('/v1/jobs/{id}', [JobController::class, 'getjob' ]); //wyświetl konkretny job


Route::delete('/v1/jobs/{id}', [JobController::class, 'deletejob' ]); //usun job


Route::post('/v1/jobs', [JobController::class, 'createjob' ]); //dodaj job


Route::post('/v1/jobs/{id}', [JobController::class, 'editjob' ]); //edytuj job


Route::get('/v1/users', [UserController::class, 'listusers' ]); //wyswietl userow, bardziej do testow


Route::get('/v1/jobs/search/{name}', [JobController::class, 'searchjob' ]); //wyszukaj job


// Dzialajacy plik api.php