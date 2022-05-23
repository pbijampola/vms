@extends('admin.layout2.master')

@section('content')

<div class="text-center mt-4">
    <h1 class="h2">Add New Department</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    <input class="form-control form-control-lg" type="text" name="employee_name"
                        value="{{ old('employee_name') }}" />
                    @error('employee_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input class="form-control form-control-lg" type="file" name="image"
                        value="{{ old('image') }}" />
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control form-control-lg" type="text" name="phone_number"
                         value="{{ old('phone_number') }}" />
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="text" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <input class="form-control form-control-lg" type="text" name="department"
                         value="{{ old('department') }}" />
                    @error('department')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Employee Role</label>
                    <input class="form-control form-control-lg" type="text" name="employee_role"
                         value="{{ old('employee_role') }}" />
                    @error('employee_role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="text-center mt-5">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary">Add Employee</button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
