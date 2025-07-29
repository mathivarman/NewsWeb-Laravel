@extends('layouts.main')
@section('title', 'Show Student')
@section('css')
@endsection
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded bg-white" style="width: 50%; margin: 10px auto;">
                    <thead>
                        <tr class="text-center" style="background: #1976d2;">
                            <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">{{ $student->student_name}}'s Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Admission No : {{ $student->admission_no }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Father Name : {{ $student->student_name }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Father Name : {{ $student->father_name }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Gender : {{ $student->gender }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">NIC No : {{ $student->nic_no }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Telephone No : {{ $student->telephone_no }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Date of Birth : {{ $student->date_of_birth }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Address : {{ $student->address }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Admission Date : {{ $student->admission_date }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Grade : {{ $student->Grade->grade_name }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Subjects :
                                <ul>
                                    @foreach($student_subjects as $subject)
                                        <br>{{ $subject->subject_name }}</br>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">
                                <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                                <a href="/students" class="btn btn-info btn-sm me-1 text-white">Back</a>
                                <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
