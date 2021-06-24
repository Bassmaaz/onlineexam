<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Exam\QuizController;
use App\Http\Controllers\Exam\QuestionController;
use App\Http\Controllers\Frontend\ExamController;


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
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});
Route::get('/user-profile', function () {
    return view('profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
Route::get('profile', [App\Http\Controllers\UserController::class, 'profile']);
Route::post('profile', [App\Http\Controllers\UserController::class, 'update_avatar']);


Route::get('/quiz_status/{id}', [App\Http\Controllers\Exam\QuizController::class, 'status']);

Route::get('/quize/addquestion/{id}', [App\Http\Controllers\Exam\QuizController::class, 'AddQuestion']);
Route::get('/quize/addquestionn/{id}', [App\Http\Controllers\Exam\QuizController::class, 'AddQuestionn']);

Route::resource('questions', QuestionController::class);


Route::prefix('admin')->group(function(){
    Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');
});

Route::get('/quiz',[App\Http\Controllers\Frontend\ExamController::class, 'quizList']);
Route::get('/exam-start/{id}',[App\Http\Controllers\Frontend\ExamController::class, 'exam']);

Route::post('/exams',[App\Http\Controllers\Frontend\ExamController::class, 'examPost']);
Route::get('/MyExamResult',[App\Http\Controllers\Frontend\ExamController::class, 'examResult']);
Route::get('/FinalResult',[App\Http\Controllers\Frontend\ExamController::class, 'examResult']);
Route::get('/MyExamDetails/{id}',[App\Http\Controllers\Frontend\ExamController::class, 'ResultDetails']);

//Route::get('/','FrontpageController@index');
Route::resource('quizes', QuizController::class);

