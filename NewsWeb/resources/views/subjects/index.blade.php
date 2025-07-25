@extends('layouts.main')
@section('title', 'Subjects')
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded" style="background: #fff;">
            <thead>
                <tr class="text-center" style="background: #1976d2;">
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Subject Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Subject Code</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Subject Index</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Subject Type</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr style="background: #f7fbff;">
                    <td class="text-center align-middle">{{ $subject->subject_name }}</td>
                    <td class="text-center align-middle">{{ $subject->subject_code }}</td>
                    <td class="text-center align-middle">{{ $subject->subject_index }}</td>
                    <td class="text-center align-middle">{{ $subject->subject_type }}</td>
                    <td class="text-center align-middle">
                        <a href="/subjects/{{ $subject->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                        <a href="/subjects/{{ $subject->id }}" class="btn btn-info btn-sm me-1 text-white">Show</a>
                        <form action="/subjects/{{ $subject->id }}" method="post" class="d-inline">
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
