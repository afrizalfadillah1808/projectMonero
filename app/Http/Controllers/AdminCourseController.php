<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.courses.index', [
            'title' => 'Dashboard',
            'courses' => Course::all()->load('mentor', 'category')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.courses.create', [
            'title' => 'Dashboard',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaCourse' => 'required',
            'lamaVideo' => 'required',
            'jumlahVideo' => 'required',
            'hargaCourse' => 'required',
            'category_id' => 'required',
            'slugCourse' => 'required|unique:courses',
            'imgCourse' => 'image|file|max:2048',
            'deskripsiCourse' => 'required'
        ]);

        if($request->hasFile('imgCourse')) {
            $validatedData['imgCourse'] = $request->file('imgCourse')->store('imgCourse', 'public');
        }

        $validatedData['mentor_id'] = auth()->user()->id;

        Course::create($validatedData);

        return redirect('/dashboard/admin/courses')->with('success', 'Course has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('dashboard.admin.courses.show', [
            'title' => 'Dashboard',
            'course' => $course->load('mentor', 'category')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('dashboard.admin.courses.edit', [
            'title' => 'Dashboard',
            'course' => $course->load('mentor', 'category'),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
      $rules = [
        'namaCourse' => 'required',
        'lamaVideo' => 'required',
        'jumlahVideo' => 'required',
        'hargaCourse' => 'required',
        'category_id' => 'required',
        'slugCourse' => 'required|unique:courses,slugCourse,' . $course->id,
        'deskripsiCourse' => 'required'
      ];

      if($request->file('imgCourse')) {
        $rules['imgCourse'] = 'image|file|max:2048';
      }

      $validatedData = $request->validate($rules);

      if($request->hasFile('imgCourse')) {
        if($request->oldImage) {
          Storage::disk('public')->delete($request->oldImage);
        }
        $validatedData['imgCourse'] = $request->file('imgCourse')->store('imgCourse', 'public');
      }

      $validatedData['mentor_id'] = auth()->user()->id;

      Course::where('id', $course->id)
        ->update($validatedData);

      return redirect('/dashboard/admin/courses')->with('success','Course has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course->imgCourse) {
            Storage::disk('public')->delete($course->imgCourse);
        }

        Course::destroy($course->id);

        return redirect('/dashboard/admin/courses')->with('success','Course has been Deleted!');
    }

    public function checkSlug(Request $request) {
      $slug = SlugService::createSlug(Course::class, 'slugCourse', $request->namaCourse);
      return response()->json(['slug' => $slug]);
    }
}
