@extends('layouts.main')
@section('title', 'Show Grade')
@section('css')
@endsection
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded bg-white" style="width: 50%; margin: 10px auto;">
                    <thead>
                        <tr class="text-center" style="background: #1976d2;">
                            <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">{{ $grade->grade_name }}'s Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Grade Name: {{ $grade->grade_name }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Grade Group : {{ $grade->grade_group }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Grade Order : {{ $grade->grade_order }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">Grade Color : {{ $grade->grade_color }}</td>
                        </tr>
                        <tr style="background: #f7fbff;">
                            <td class="text-center align-middle">
                                <a href="/grades/{{ $grade->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                                <a href="/grades" class="btn btn-info btn-sm me-1 text-white">Back</a>
                                <form action="/grades/{{ $grade->id }}" method="post" class="d-inline">
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
