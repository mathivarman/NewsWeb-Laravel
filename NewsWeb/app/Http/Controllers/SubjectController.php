<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method can be used to show a form for creating a new subject
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        $subject->subject_index = $request->subject_index;
        $subject->subject_type = $request->subject_type;
        $subject->save();

        return redirect('/subjects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::find($id);
        $subject_students = $subject->students;
        $subject_grades = $subject->grades;
        return view('subjects.show', compact('subject', 'subject_students', 'subject_grades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::find($id);
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        $subject->subject_index = $request->subject_index;
        $subject->subject_type = $request->subject_type;
        $subject->save();

        return redirect('/subjects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        return redirect('/subjects');
    }
}
