@extends('admin.layout2.master')

//

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <form action="{{ route('department.update', $departments->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label">Department Name</label>
                        <input class="form-control form-control-lg" type="text" name="department_name"
                            value="{{ $departments->department_name }}" />
                        @error('department_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Office Number</label>
                        <input class="form-control form-control-lg" type="text" name="office_number"
                            value="{{ $departments->office_number }}" />
                        @error('office_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Head of Departtment</label>
                        <input class="form-control form-control-lg" type="text" name="hod"
                            value="{{ $departments->hod }}" />
                        @error('hod')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Assistant of Department</label>
                        <input class="form-control form-control-lg" type="text" name="assistant"
                            value="{{ $departments->assistant }}" />
                        @error('assistant')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="text-center mt-3 row d-flex">
                            {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                            <button type="submit" class="btn btn-lg btn-primary">Add Department</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
