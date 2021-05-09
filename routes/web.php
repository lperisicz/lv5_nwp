<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('register');
});

Route::get('/register', function (Request $request) {
    $loggedId = $request->session()->get('user.id');
    if ($loggedId) {
        return redirect('/tasks');
    }

    return view('register');
});

Route::get('/login', function (Request $request) {
    $loggedId = $request->session()->get('user.id');
    if ($loggedId) {
        return redirect('/tasks');
    }

    return view('login');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/users', [UserController::class, 'show']);
Route::get('/change-role/{id}/{role}', [UserController::class, 'changeRole']);

Route::get('/tasks', [TaskController::class, 'show']);
Route::post('/task-create', [TaskController::class, 'create']);
Route::get('/task-create', function (Request $request) {
    $loggedRole = $request->session()->get('user.role');
    if ($loggedRole != 'teacher') return redirect('/tasks');

    return view('task-create');
});

Route::get('/apply/{taskId}', [TaskController::class, 'apply']);
Route::get('/approve/{taskId}/{userId}', [TaskController::class, 'approve']);
Route::get('/applicants/{taskId}', [TaskController::class, 'applicants']);
