<?php

use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use App\Models\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;

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
        'namaMentor' => 'Rizal Fauzi Udin',
        'commentUser' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti numquam perferendis. Quae, eaque! Maiores enim veniam asperiores sunt? Architecto, corporis. Nesciunt corrupti quia omnis aut obcaecati quam cumque fuga.',
        'courses' => Course::take(4)->get()
    ]);
});

// Classes
Route::get('/classes', [CourseController::class, 'indexCourse']);

// Single Class
Route::get('/class/{class:slugCourse}', [CourseController::class, 'showCourse']);

// Categories
Route::get('/categories/{category:slugCategory}', function (Category $category) {
    return view('category', [
        'title' => 'Category',
        'namaCategory' => $category->namaCategory,
        'courses' => $category->courses
    ]);
});

// Mentors
Route::get('/mentors', function () {
    return view('mentors', [
        'title' => 'Mentors',
        'mentors' => Mentor::all()
    ]);
});

// Register
Route::get('/register', function () {
    return view('register.index', [
        'title' => 'Register'
    ]);
});

// Login
Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Login'
    ]);
});

// Checkout
Route::get('/checkout', function() {
    return view('checkout.index', [
        'title' => 'Checkout'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');