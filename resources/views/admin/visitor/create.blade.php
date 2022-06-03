@extends('admin.layout2.master')

@section('content')
    <form action="{{ route('visitor.store') }}" method="POST">
        @csrf
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2">Full Name</h5>
                    <input type="text" class="form-control" name="name" placeholder="Visitor Full Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Phone Number</h5>
                    <input type="text" class="form-control" name="phone_number" placeholder="Visitor Phone Number"
                        value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Email</h5>
                    <input type="text" class="form-control" name="email" placeholder="Visitor Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Address</h5>
                    <input type="text" class="form-control" name="address" placeholder="Visitor Address"
                        value="{{ old('address') }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Gender</h5>
                    <select class="form-select mb-3" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Designation/Job</h5>
                    <input type="text" class="form-control" name="designation" placeholder="Visitor Designation"
                        value="{{ old('designation') }}">
                    @error('designation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Visiting Who?</h5>
                    <select class="form-select mb-3" name="visit_who">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('visit_who')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Date</h5>
                    <input type="date" class="form-control" name="date" placeholder="Visitation Date"
                        value="{{ old('date') }}">
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Time In</h5>
                    <input type="time" class="form-control" name="in_time" placeholder="Arrival Time"
                        value="{{ old('in_time') }}">
                    @error('in_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Description/Reason</h5>
                    <textarea class="summernote form-control" name="description" rows="2" placeholder="Reason for visiting"
                        id="editor1">value="{{ old('description') }}"</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-2">Time Out</h5>
                    <input type="time" class="form-control" name="out_time" placeholder="Leaving Time"
                        value="{{ old('out_time') }}">
                    @error('out_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button class="btn btn-primary lg">submit</button>
            </div>


    </form>
@endsection

@section('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('editor1');
    </script>
@endsection
