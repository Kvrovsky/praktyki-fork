<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

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


// Route::put('/v1/jobs/{id}', function(Request $request, $id) { //edytuj joba 
// =======

Route::post('/register', [AuthController::class, 'register']); //rejestracja usera


Route::post('/login', [AuthController::class, 'login']); //login user


Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum'); //fetch current user, jedynie dla autoryzowanych 


Route::get('/v1/jobs/{id}', [JobController::class, 'getjob' ]);  //wyświetl konkretny job, działa


Route::put('/v1/jobs/{id}', [JobController::class, 'editjob' ]); //edit job


// Route::post('/v1/jobs', [JobController::class, 'createjob' ]); //dodaj joba


// Route::put('/v1/jobs/:id', function(Request $request, $id) { //edytuj joba 
// >>>>>>> d82d8d05b623908b47d25f782c27a4dc6b8203b5
//     //return Jobs::find($id);
//     $job = Jobs::findOrFail($id);
//     $job->update($request->all());
//     return $job;
// });




// Route::get('/v1/jobs', function() { //wyświetl wszystkie jobsy
//     return Jobs::all();
// =======

// Route::post('/v1/jobs', function(Request $request) { //dodaj joba
//     Jobs::create($request->all);
//     return 201;
// >>>>>>> d82d8d05b623908b47d25f782c27a4dc6b8203b5
// });




// Route::post('/v1/jobs', function(Request $request) { //dodaj joba
//     Jobs::create($request->all);
//     return 201;
// =======
// Route::delete('/v1/jobs/{id}', function($id) { //usun job 
//     Jobs::find($id)->delete();
//     return 204;
// >>>>>>> d82d8d05b623908b47d25f782c27a4dc6b8203b5
// });




// Route::delete('/v1/jobs/{id}', function($id) { //usun job 
//     Jobs::find($id)->delete();
//     return 204;
// =======
// Route::get('/v1/jobs/:id', function($id) { //wyświetl konkretny job
//     return Jobs::find($id);
// >>>>>>> d82d8d05b623908b47d25f782c27a4dc6b8203b5
// });




// Route::get('/v1/jobs/{id}', function($id) { //wyświetl konkretny job
//     return Jobs::find($id);
// });



// Route::get('/v1/users', function() { //wyświetl pracodawców
//     return users::all();
// });

// // rejestracja i logowanie w tym miejscu do zrobienia


// =======
// Route::get('/v1/users', function() { //wyświetl pracodawców
//     return Users::all();
// });

// // rejestracja i logowanie w tym miejscu do zrobienia


// >>>>>>> d82d8d05b623908b47d25f782c27a4dc6b8203b5
// Route::get('/v1/search', function() {
//     Jobs::find($name)->return;
// });
