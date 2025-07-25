<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student;
        $student->admission_no = $request->admission_no;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->nic_no = $request->nic_no;
        $student->telephone_no = $request->telephone_no;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->admission_date = $request->admission_date;
        $student->save();
        return redirect('/students');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->admission_no = $request->admission_no;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->nic_no = $request->nic_no;
        $student->telephone_no = $request->telephone_no;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->admission_date = $request->admission_date;
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
