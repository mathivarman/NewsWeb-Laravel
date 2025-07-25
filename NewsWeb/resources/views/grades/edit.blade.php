@extends('layouts.main')
@section('title', 'Edit Grade')
@section('content')
<div class="container" style="max-width: 400px; margin-top: 60px; margin-bottom: 60px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center text-primary mb-4">Edit Grade</h2>
            <form action="/grades/{{ $grade->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="grade_name" class="form-label fw-semibold text-primary">Grade Name</label>
                    <input type="text" id="grade_name" name="grade_name" class="form-control" value="{{ $grade->grade_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="grade_order" class="form-label fw-semibold text-primary">Grade Order No</label>
                    <input type="text" id="grade_order" name="grade_order" class="form-control" value="{{ $grade->grade_order }}" required>
                </div>

                <div class="mb-3">
                    <label for="grade_color" class="form-label fw-semibold text-primary">Grade Color</label>
                    <input type="text" id="grade_color" name="grade_color" class="form-control" value="{{ $grade->grade_color }}" required>
                </div>

                <div class="mb-3">
                    <label for="grade_group" class="form-label fw-semibold text-primary">Grade Group</label>
                    <input type="text" id="grade_group" name="grade_group" class="form-control" value="{{ $grade->grade_group }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
