@extends('admin.layout2.master')

@section('content')
    <form action="{{ route('visitor.update', $visitors->id) }}" method="POST">
        @csrf
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2">Full Name</h5>
                    <input type="text" class="form-control" name="name" value="{{ $visitors->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Phone Number</h5>
                    <input type="text" class="form-control" name="phone_number" value="{{ $visitors->phone_number }}">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Email</h5>
                    <input type="text" class="form-control" name="email" value="{{ $visitors->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Address</h5>
                    <input type="text" class="form-control" name="address" value="{{ $visitors->address }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Gender</h5>
                    <input type="text" class="form-control" name="gender" value="{{ $visitors->gender }}">
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Designation/Job</h5>
                    <input type="text" class="form-control" name="designation" value="{{ $visitors->designation }}">
                    @error('designation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Visiting Who?</h5>
                    <select class="form-select mb-3" name="visit_who">
                        <option selected>Select Visited Personel </option>
                        @foreach ($users as $user)
                            <option value="{{ $visitors->visit_who }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('visit_who')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Time In</h5>
                    <input type="time" class="form-control" name="in_time" value="{{ $visitors->in_time }}">
                    @error('in_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Description/Reason</h5>
                    <textarea class="form-control" name="description" rows="2">{{ $visitors->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Time Out</h5>
                    <input type="time" class="form-control" name="out_time" value="{{ $visitors->out_time }}">
                    @error('out_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button class="btn btn-primary lg">Update</button>
            </div>


    </form>
@endsection
