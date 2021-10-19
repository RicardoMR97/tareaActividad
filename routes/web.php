<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

use App\Models\Tarea;
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
    $tareas = Tarea::all();
    return view('tarea.index',compact('tareas'));
});

Route::resource('tarea',TareaController::class);  
