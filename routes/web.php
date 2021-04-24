<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseClassController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
| REMEMBER: php artisan route:list to see the Route List
|
*/

Route::resource('/courses', CourseController::class);
Route::resource('/courseclasses', CourseClassController::class);
Route::resource('/students', StudentController::class);