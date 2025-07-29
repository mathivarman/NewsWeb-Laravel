<?php

namespace App\Http\Controllers;
use App\Models\Grade;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->grade_name = $request->grade_name;
        $grade->grade_order = $request->grade_order;
        $grade->grade_color = $request->grade_color;
        $grade->grade_group = $request->grade_group;
        $grade->save();

        return redirect('/grades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        $grade_students = $grade->students;
        $grade_subjects = $grade->subjects;
        return view('grades.show', compact('grade', 'grade_students', 'grade_subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::find($id);
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grade = Grade::find($id);
        $grade->grade_name = $request->grade_name;
        $grade->grade_order = $request->grade_order;
        $grade->grade_color = $request->grade_color;
        $grade->grade_group = $request->grade_group;
        $grade->save();

        return redirect('/grades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::find($id);
        $grade->delete();
        return redirect('/grades');
    }

}
