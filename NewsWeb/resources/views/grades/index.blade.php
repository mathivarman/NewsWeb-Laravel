@extends('layouts.main')
@section('title', 'Grades List')
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded" style="background: #fff;">
            <thead>
                <tr class="text-center" style="background: #1976d2;">
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade Order</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade Color</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Grade Group</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                <tr style="background: #f7fbff;">
                    <td class="text-center align-middle">{{ $grade->grade_name }}</td>
                    <td class="text-center align-middle">{{ $grade->grade_order }}</td>
                    <td class="text-center align-middle">{{ $grade->grade_color }}</td>
                    <td class="text-center align-middle">{{ $grade->grade_group }}</td>
                    <td class="text-center align-middle">
                        <a href="/grades/{{ $grade->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                        <a href="/grades/{{ $grade->id }}" class="btn btn-info btn-sm me-1 text-white">Show</a>
                        <form action="/grades/{{ $grade->id }}" method="post" class="d-inline">
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
