<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::put('/v1/jobs/{id}', [JobController::class, 'editJob']);

Route::post('/v1/jobs', [JobController::class, 'addJob']);

Route::delete('/v1/jobs/{id}', [JobController::class, 'deleteJob']);

Route::get('/v1/jobs/{id}', [JobController::class, 'showJob']);

Route::get('/v1/users', [JobController::class, 'showEmployer']);

Route::get('/v1/login', [{]JobController::class, 'authorize']);

Route::post('/v1/register', [JobController::class, 'register']);

Route::get('/v1/search', [JobController::class, 'search']);;
*/


Route::put('v1/jobs/{id}', function(Request $request, $id) { //edytuj joba 
    //return Jobs::find($id);
    $job = Jobs::findOrFail($id);
    $job->update($request->all());
    return $job;
});



Route::get('v1/jobs', function() { //wyświetl wszystkie jobsy
    return Jobs::all();
});



Route::post('v1/jobs', function(Request $request) { //dodaj joba
    Jobs::create($request->all);
    return 201;
});



Route::delete('v1/jobs/{id}', function($id) { //usun job 
    Jobs::find($id)->delete();
    return 204;
});



Route::get('v1/jobs/{id}', function($id) { //wyświetl konkretny job
    return Jobs::find($id);
});



Route::get('v1/users', function() { //wyświetl pracodawców
    return Users::all();
});

// rejestracja i logowanie w tym miejscu do zrobienia


Route::get('v1/search', function() {
    Jobs::find($name)->return;
});


/*
Use App\Article;
 
Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
})
*/