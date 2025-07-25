@extends('layouts.main')
@section('title', 'Edit Subjects')
@section('content')
<div class="container" style="max-width: 400px; margin-top: 60px; margin-bottom: 60px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center text-primary mb-4">Edit Subjects</h2>
            <form action="/subjects/{{ $subject->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="subject_name" class="form-label fw-semibold text-primary">Subject Name</label>
                    <input type="text" id="subject_name" name="subject_name" class="form-control" value="{{ $subject->subject_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="subject_code" class="form-label fw-semibold text-primary">Subject Code</label>
                    <input type="text" id="subject_code" name="subject_code" class="form-control" value="{{ $subject->subject_code }}" required>
                </div>

                <div class="mb-3">
                    <label for="subject_index" class="form-label fw-semibold text-primary">Subject Index</label>
                    <input type="text" id="subject_index" name="subject_index" class="form-control" value="{{ $subject->subject_index }}" required>
                </div>
                <div class="mb-3">
                    <label for="subject_type" class="form-label fw-semibold text-primary">Subject Type</label>
                    <input type="text" id="subject_type" name="subject_type" class="form-control" value="{{ $subject->subject_type }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
