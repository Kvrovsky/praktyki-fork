<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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


Route::get('/v1/jobs', [JobController::class, 'listjobs']);

Route::put('/v1/jobs/{id}', function(Request $request, $id) { //edytuj joba 
    //return Jobs::find($id);
    $job = Jobs::findOrFail($id);
    $job->update($request->all());
    return $job;
});



Route::get('/v1/jobs', function() { //wyświetl wszystkie jobsy
    return Jobs::all();
});



Route::post('/v1/jobs', function(Request $request) { //dodaj joba
    Jobs::create($request->all);
    return 201;
});



Route::delete('/v1/jobs/{id}', function($id) { //usun job 
    Jobs::find($id)->delete();
    return 204;
});



Route::get('/v1/jobs/{id}', function($id) { //wyświetl konkretny job
    return Jobs::find($id);
});



Route::get('/v1/users', function() { //wyświetl pracodawców
    return Users::all();
});

// rejestracja i logowanie w tym miejscu do zrobienia


Route::get('/v1/search', function() {
    Jobs::find($name)->return;
});
