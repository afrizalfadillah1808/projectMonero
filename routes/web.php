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
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminMentorController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDiscountController;
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
        'commentUser01' => '"Effective learning outcomes" - website yang mampu menghasilkan hasil belajar yang efektif dan membantu pengguna untuk memahami dan menguasai materi dengan baik.',
        'commentUser02' => '"Value for money" - website yang memberikan nilai yang sebanding dengan harga yang dibayarkan, baik dari segi kualitas materi ataupun fitur yang disediakan.',
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
        // count the length of the namaCourse string and sort it from the shortest to the longest
        // 'courses' => $category->courses->load('category', 'mentor')->sortBy('namaCourse')
        'courses' => Course::orderByRaw('LENGTH(namaCourse) ASC')->where('category_id', $category->id)->get()
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

// Dashboard, Categories
Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show'])->middleware('isAdmin');

// Dashboard, Mentors
Route::resource('/dashboard/mentors', AdminMentorController::class)->except(['show'])->middleware('isAdmin');

// Dashboard, Discounts
Route::resource('/dashboard/discounts', AdminDiscountController::class)->except(['show'])->middleware('isAdmin');

// Dashboard, Courses
Route::resource('/dashboard/admin/courses', AdminCourseController::class)->middleware('isAdmin');

// Checkout
Route::get('/checkout', function () {
    return view('checkout.index', [
        'title' => 'Checkout',
    ]);
});

// Dashboard, Discount
Route::get('/dashboard/discounts', function () {
  return view('dashboard.discounts.index', [
      'title' => 'Discount',
      'discounts' => Discount::all()
  ]);
});

// Dashboard, Mentors
Route::get('/dashboard/mentors', function () {
  return view('dashboard.mentors.index', [
      'title' => 'Mentors',
      'mentors' => Mentor::all()
  ]);
});