@extends('layouts.main')
@section('title', 'Edit Student')
@section('content')
<div class="container" style="max-width: 400px; margin-top: 60px; margin-bottom: 60px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center text-primary mb-4">{{ $student->student_name }}'s Edit</h2>
            <form action="/students/{{ $student->id }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="admission_no" class="form-label fw-semibold text-primary">Admission No</label>
                    <input type="text" id="admission_no" name="admission_no" class="form-control" value="{{ $student->admission_no }}" required>
                </div>
                <div class="mb-3">
                    <label for="student_name" class="form-label fw-semibold text-primary">Student Name</label>
                    <input type="text" id="student_name" name="student_name" class="form-control" value="{{ $student->student_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label fw-semibold text-primary">Father Name</label>
                    <input type="text" id="father_name" name="father_name" class="form-control" value="{{ $student->father_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-semibold text-primary">Gender : </label>
                    <input type="radio" id="gender_male" name="gender" value="male" {{ $student->gender == 'male' ? 'checked' : '' }}>
                    <label for="gender_male" class="text-primary"> Male</label>
                    <input type="radio" id="gender_female" name="gender" value="female" {{ $student->gender == 'female' ? 'checked' : '' }}>
                    <label for="gender_female" class="text-primary"> Female</label>
                </div>
                <div class="mb-3">
                    <label for="nic_no" class="form-label fw-semibold text-primary">NIC No</label>
                    <input type="text" id="nic_no" name="nic_no" class="form-control" value="{{ $student->nic_no }}" required>
                </div>
                <div class="mb-3">
                    <label for="telephone_no" class="form-label fw-semibold text-primary">Telephone No</label>
                    <input type="text" id="telephone_no" name="telephone_no" class="form-control" value="{{ $student->telephone_no }}" required>
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label fw-semibold text-primary">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-semibold text-primary">Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3" required>{{ $student->address }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="grade_id" class="form-label fw-semibold text-primary">Grade</label>
                    <select id="grade_id" name="grade_id" class="form-select" required>
                        <option value="">Select Grade</option>
                        @foreach($grades as $grade)
                            <option value="{{ $grade->id }}" {{ $student->grade_id == $grade->id ? 'selected' : '' }}>{{ $grade->grade_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="subject_ids" class="form-label fw-semibold text-primary">Subjects</label>
                    <br>
                    @foreach($subjects as $subject)
                        <input type="checkbox" id="subject_ids" name="subject_ids[]" value="{{ $subject->id }}"
                        {{ in_array($subject->id, $student->subjects->pluck('id')->toArray()) ? 'checked' : '' }}> {{ $subject->subject_name }}<br>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="admission_date" class="form-label fw-semibold text-primary">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date" class="form-control" value="{{ $student->admission_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
