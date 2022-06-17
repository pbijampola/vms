@extends('admin.layout2.master')

@section('content')
    <div class="text-center mt-4">
        <h1 class="h2">Add New User</h1>
    </div>
    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
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
                        <input class="form-control form-control-lg" type="email" name="email"
                            value="{{ old('email') }}" />
                        @error('email')
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
                        <label class="form-label">Address</label>
                        <input class="form-control form-control-lg" type="text" name="address"
                            value="{{ old('address') }}" />
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input class="form-control form-control-lg" type="file" name="image" value="{{ old('image') }}" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select mb-3" name="gender">
                            <option value="">**select gender**</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select mb-3" name="role">
                           <optgroup>
                            <option value="">--select role--</option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{ $role->name }}</option>
                            @endforeach
                           </optgroup>
                        </select>
                        @error('role')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                         value="{{ old('password') }}" />
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
    </form>
@endsection
