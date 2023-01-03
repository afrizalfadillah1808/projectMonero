<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexCourse() {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slugCategory', request('category'));
            $title = ' pada ' .$category->namaCategory;
        }

        if (request('mentor')) {
            $mentor = Mentor::firstWhere('username', request('mentor'));
            $title = ' oleh ' .$mentor->name;
        }


        return view('classes.classes', [
            'title' => $title, 'Class',
            'namaMentor' => 'Rizal Fauzi Udin',
            'discounts' => Discount::all(),
            // 'classSubjects' => Course::latest()->filter(request(['search', 'category', 'mentor']))->get()
            'classSubjects' => Course::orderByRaw('LENGTH(namaCourse) ASC')->filter(request(['search', 'category', 'mentor']))->get()
        ]);
    }

    public function showCourse(Course $class) {
        return view('classes.class', [
            'title' => 'Class',
            'namaMentor' => 'Rizal Fauzi Udin',
            'class' => $class
        ]);
    }
}
