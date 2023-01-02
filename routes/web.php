<?php

use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardCourseController;


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
// Home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'namaUser01' => 'Widy Nugraha',
        'namaUser02' => 'Dimas Putra',
        'commentUser' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti numquam perferendis. Quae, eaque! Maiores enim veniam asperiores sunt? Architecto, corporis. Nesciunt corrupti quia omnis aut obcaecati quam cumque fuga.',
        'courses' => Course::with(['category', 'mentor'])->take(4)->get()
    ]);
});

// Classes
Route::get('/classes', [CourseController::class, 'indexCourse']);

// Single Class
Route::get('/class/{class:slugCourse}', [CourseController::class, 'showCourse']);

// Categories
Route::get('/categories/{category:slugCategory}', function (Category $category) {
    return view('categories.category', [
        'title' => 'Category',
        'namaCategory' => $category->namaCategory,
        'courses' => $category->courses->load('category', 'mentor')
    ]);
});

// Mentors
Route::get('/mentors', function () {
    return view('mentors.mentors', [
        'title' => 'Mentors',
        'mentors' => Mentor::all()
    ]);
});

// Courses by Mentor
Route::get('/mentors/{mentor:username}', function (Mentor $mentor) {
    return view('mentors.mentor', [
        'title' => 'Mentors',
        'namaMentor' => $mentor->name,
        'courses' => $mentor->courses->load('category', 'mentor')
    ]);
});

// Detail Mentor
Route::get('/mentors/detail/{mentor:username}', function (Mentor $mentor) {
    return view('mentors.mentor-detail', [
        'title' => 'Mentors',
        'namaMentor' => $mentor->name,
        'mentor' => $mentor
    ]);
});

// Register
Route::get('/register', [RegisterController::class, 'registerAccount'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'storeAccount']);

// Login
Route::get('/login', [LoginController::class, 'loginAccount'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'loginAuth']);

// Logout
Route::post('/logout', [LoginController::class, 'logoutAuth']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
    ]);
})->middleware('auth');

Route::get('/dashboard/courses/checkSlug', [DashboardCourseController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/courses', DashboardCourseController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show'])->middleware('isAdmin');

// Checkout
Route::get('/checkout', function () {
    return view('checkout.index', [
        'title' => 'Checkout',
    ]);
});