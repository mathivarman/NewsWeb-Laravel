@extends('layouts.main')
@section('title', 'Grades List')
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded" style="background: #fff;">
            <thead>
                <tr class="text-center" style="background: #1976d2;">
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade ID</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Student name</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($grade_students as $stu)
                <tr style="background: #f7fbff;">
                    <td class="text-center align-middle">{{ $stu->grade_id }}</td>
                    <td class="text-center align-middle">{{ $stu->student_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </section>
@endsection
