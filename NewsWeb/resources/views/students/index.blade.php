@extends('layouts.main')
@section('title', 'Students')
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
            <table class="table table-bordered table-hover shadow rounded" style="background: #fff;">
            <thead>
                <tr class="text-center" style="background: #1976d2;">
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Admission No</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Student Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Father Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Gender</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">NIC No</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Telephone No</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Date of Birth</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Address</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Admission Date</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr style="background: #f7fbff;">
                    <td class="text-center align-middle">{{ $student->admission_no }}</td>
                    <td class="text-center align-middle">{{ $student->student_name }}</td>
                    <td class="text-center align-middle">{{ $student->father_name }}</td>
                    <td class="text-center align-middle">{{ $student->Grade->grade_name }}</td>
                    <td class="text-center align-middle">{{ $student->gender }}</td>
                    <td class="text-center align-middle">{{ $student->nic_no }}</td>
                    <td class="text-center align-middle">{{ $student->telephone_no }}</td>
                    <td class="text-center align-middle">{{ $student->date_of_birth }}</td>
                    <td class="text-center align-middle">{{ $student->address }}</td>
                    <td class="text-center align-middle">{{ $student->admission_date }}</td>
                    <td class="text-center align-middle">
                        <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                        <a href="/students/{{ $student->id }}" class="btn btn-info btn-sm me-1 text-white">Show</a>
                        <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </section>
@endsection
