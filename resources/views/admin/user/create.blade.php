@extends('admin.layout2.master')

@section('content')
    <div class="text-center mt-4">
        <h1 class="h2">Add New User</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input class="form-control form-control-lg" type="text" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter Email"
                            value="{{ old('email') }}" />
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input class="form-control form-control-lg" type="text" name="phone_number"
                            placeholder="Enter Phone NUmber" value="{{ old('phone_number') }}" />
                        @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input class="form-control form-control-lg" type="text" name="address" placeholder="Enter Address"
                            value="{{ old('address') }}" />
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input class="form-control form-control-lg" type="file" name="photo" value="{{ old('photo') }}" />
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <input class="form-control form-control-lg" type="text" name="department"
                            placeholder="Enter Department" value="{{ old('department') }}" />
                        @error('department')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                            placeholder="Enter password" value="{{ old('password') }}" />
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center mt-3">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
