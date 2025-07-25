@extends('layouts.main')
@section('title', 'Show Subject')
@section('css')
@endsection
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded bg-white" style="width: 50%; margin: 10px auto;">
                    <thead>
                        <tr class="text-center" style="background: #1976d2;">
                            <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">{{ $subject->subject_name}}'s Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Subject Name: {{ $subject->subject_name }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Subject Code : {{ $subject->subject_code }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Subject Index : {{ $subject->subject_index }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Subject Type : {{ $subject->subject_type }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">
                                <a href="/subjects/{{ $subject->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                                <a href="/subjects" class="btn btn-info btn-sm me-1 text-white">Back</a>
                                <form action="/subjects/{{ $subject->id }}" method="post" class="d-inline">
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
