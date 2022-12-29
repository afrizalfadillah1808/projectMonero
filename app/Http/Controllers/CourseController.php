<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function indexCourse() {
        return view('classes', [
            'title' => 'Class',
            'namaMentor' => 'Rizal Fauzi Udin',
            'classSubjects' => Course::all()
        ]);
    }

    public function showCourse(Course $class) {
        return view('class', [
            'title' => 'Class',
            'namaMentor' => 'Rizal Fauzi Udin',
            'class' => $class
        ]);
    }
}
