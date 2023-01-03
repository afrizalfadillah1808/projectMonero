<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class AdminMentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mentors.index', [
            'title' => 'Mentors',
            'mentors' => Mentor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mentors.create', [
            'title' => 'Mentors',
            'mentors' => Mentor::all()
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
        // name, username, email, password, deskripsiMentor

        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:mentors',
            'email' => 'required|unique:mentors',
            'password' => 'required',
            'deskripsiMentor' => 'required'
        ]);

        Mentor::create($validatedData);

        return redirect('/dashboard/mentors')->with('success', 'Mentor has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentor $mentor)
    {
        return view('dashboard.mentors.edit', [
            'title' => 'Mentors',
            'mentor' => $mentor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentor $mentor)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:mentors',
            'email' => 'required|unique:mentors',
            'password' => 'required',
            'deskripsiMentor' => 'required'
        ]);

        Mentor::where('id', $mentor->id)
            ->update($validatedData);

        return redirect('/dashboard/mentors')->with('success', 'Mentor has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentor $mentor)
    {
        Mentor::destroy($mentor->id);
        return redirect('/dashboard/mentors')->with('success', 'Mentor has been Deleted');
    }
}
