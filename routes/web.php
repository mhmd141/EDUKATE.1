<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\website\HomeController;

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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/pages/{slug}', [HomeController::class, 'pages'])->name('pages');
Route::get('/course/{id}', [HomeController::class, 'course'])->name('course'); // Route for course detail page
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');   // Route for courses page
Route::post('/search', [HomeController::class, 'search'])->name('search');   // Route for courses page
Route::post('/help', [HomeController::class, 'store'])->name('help');   // Route for courses page
Route::get('/feature', [HomeController::class, 'feature'])->name('feature');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/instructor', [HomeController::class, 'instructor'])->name('instructor');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::Post('/signupPost', [UserController::class, 'signupPost'])->name('signupPost');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/forgetpassword', [UserController::class, 'forgetpassword'])->name('forgetpassword');
Route::Post('/forgetpasswordPost', [UserController::class, 'forgetpasswordPost'])->name('forgetpasswordPost');
Route::Post('/loginPost', [UserController::class, 'loginPost'])->name('loginPost');


Route::group(['middleware' => ['auth']], function () {
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/changePassword', [UserController::class, 'changePassword'])->name('changePassword');
Route::post('/updateMyProfile', [UserController::class, 'updateMyProfile'])->name('updateMyProfile');
Route::get('/editpassword', [UserController::class, 'editpassword'])->name('editpassword');
Route::post('/editpasswordPost', [UserController::class, 'editpasswordPost'])->name('editpasswordPost');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');



});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'adminHome'])->name('adminLogin');
    Route::post('loginPost', [AdminController::class, 'loginPost'])->name('adminloginPost');
    Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [AdminController::class, 'adminHome'])->name('adminHome');
    Route::get('/adminProfile', [AdminController::class, 'adminProfile'])->name('adminProfile');
    Route::resource('/courses', CourseController::class);
    Route::get('/courses/{id}/delete',[CourseController::class,'destroy']);
    Route::resource('/lessons', LessonController::class);
    Route::get('/lessons/{id}/delete',[LessonController::class,'destroy']);
    Route::resource('/attachments', AttachmentController::class);
    Route::get('/attachments/{id}/delete',[AttachmentController::class,'destroy']);
    Route::resource('/instructors', InstructorController::class);
    Route::get('/instructors/{id}/delete',[InstructorController::class,'destroy']);
    Route::get('/pages/{id}/delete',[PageController::class,'destroy']);
    Route::resource('/pages', PageController::class);
    Route::get('/logout', [AdminController::class, 'logout'])->name('adminlogout');
});
    });

