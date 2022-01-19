<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------|
|                               API Routes                                 |
|--------------------------------------------------------------------------|
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
/*
Route::get('/articles', [ArticleController::class, 'listArticles']);

Route::get('/articles/{id}', [ArticleController::class, 'readArticle']);

Route::delete('/articles/{id}', [ArticleController::class, 'deleteArticle']);

Route::post('/articles', [ArticleController::class, 'createArticle']);
*/

Route::get('/jobs', [JobController::class, 'listjobs']);

/*Route::put('api/v1/jobs/{id}', function(Request $request, $id) { //edytuj joba 
    //return Jobs::find($id);
    $job = Jobs::findOrFail($id);
    $job->update($request->all());
    return $job;
});



Route::get('api/v1/jobs', function() { //wyświetl wszystkie jobsy
    return Jobs::all();
});



Route::post('api/v1/jobs', function(Request $request) { //dodaj joba
    Jobs::create($request->all);
    return 201;
});



Route::delete('api/v1/jobs/{id}', function($id) { //usun job 
    Jobs::find($id)->delete();
    return 204;
});



Route::get('api/v1/jobs/{id}', function($id) { //wyświetl konkretny job
    return Jobs::find($id);
});



Route::get('api/v1/users', function() { //wyświetl pracodawców
    return users::all();
});

// rejestracja i logowanie w tym miejscu do zrobienia


Route::get('api/v1/search', function() {
    Jobs::find($name)->return;
});
*/