@extends('layouts.main')
@section('title', 'Create Student')
@section('content')
<div class="container" style="max-width: 400px; margin-top: 60px; margin-bottom: 60px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center text-primary mb-4">Create Student</h2>
            <form action="/students" method="post">
                @csrf
                <div class="mb-3">
                    <label for="admission_no" class="form-label fw-semibold text-primary">Admission No</label>
                    <input type="text" id="admission_no" name="admission_no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="student_name" class="form-label fw-semibold text-primary">Student Name</label>
                    <input type="text" id="student_name" name="student_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label fw-semibold text-primary">Father Name</label>
                    <input type="text" id="father_name" name="father_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-semibold text-primary">Gender : </label>
                    <input type="radio" id="gender_male" name="gender" value="male"  checked>
                    <label for="gender_male" class="text-primary"> Male</label>
                    <input type="radio" id="gender_female" name="gender" value="female" >
                    <label for="gender_female" class="text-primary"> Female</label>
                </div>
                <div class="mb-3">
                    <label for="nic_no" class="form-label fw-semibold text-primary">NIC No</label>
                    <input type="text" id="nic_no" name="nic_no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="telephone_no" class="form-label fw-semibold text-primary">Telephone No</label>
                    <input type="text" id="telephone_no" name="telephone_no" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label fw-semibold text-primary">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-semibold text-primary">Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="admission_date" class="form-label fw-semibold text-primary">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
