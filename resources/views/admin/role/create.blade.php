@extends('admin.layout2.master')

@section('content')

<div class="text-center mt-4">
    <h1 class="h2">Add New Employee</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Role Name</label>
                    <input class="form-control form-control-lg" type="text" name="employee_name"
                        value="{{ old('employee_name') }}" />
                    @error('employee_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="text-center mt-5">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary">Add Role</button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
