<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/vue/{vue_capture?}', function () {
    return view('vue.index');
})->where('vue_capture', '[\/\w\.-]*');

// 3 routes pour la liste des taches

/**
 * Display All Tasks
 */
Route::get('/tasks', function () {
    $tasks= Task::orderBy('created_at','desc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/tasks');
});
/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
});


//route de base du projet Laravel/ page d'accueil

Route::get('/', function () {
    return view('welcome');
});
