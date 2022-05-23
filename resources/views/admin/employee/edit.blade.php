@extends('admin.layout2.master')

@section('content')

<div class="text-center mt-4">
    <h1 class="h2">Edit Employee Details</h1>
</div>
<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('employee.update',$employees->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    <input class="form-control form-control-lg" type="text" name="employee_name"
                        value="{{ $employees->employee_name}}" />
                    @error('employee_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input class="form-control form-control-lg" type="file" name="image"
                        value="{{ $employees->image }}" />
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control form-control-lg" type="text" name="phone_number"
                         value="{{ $employees->phone_number}}" />
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="text" name="email" value="{{$employees->email}}" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <input class="form-control form-control-lg" type="text" name="department"
                         value="{{ $employees->department }}" />
                    @error('department')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Employee Role</label>
                    <input class="form-control form-control-lg" type="text" name="employee_role"
                         value="{{ $employees->employee_role }}" />
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
