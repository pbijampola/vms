@extends('admin.layout2.master')

@section('content')

<div class="text-center mt-4">
    <h1 class="h2">Create Invitation</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('invitee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Invitee Name</label>
                    <input class="form-control form-control-lg" type="text" name="name"
                        value="{{ old('name') }}" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control form-control-lg" type="text" name="mobile_number"
                         value="{{ old('mobile_number') }}" />
                    @error('mobile_number')
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
                    <label class="form-label">Host</label>
                    <input class="form-control form-control-lg" type="text" name="host"
                         value="{{ old('host') }}" />
                    @error('host')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Purpose</label>
                   <textarea class="summernote form-control" name="purpose">{{old('purpose')}}</textarea>
                    @error('purpose')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Invitation Date</label>
                    <input class="form-control form-control-lg" type="date" name="invite_date"
                         value="{{ old('invite_date') }}" />
                    @error('invite_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Invitation Time</label>
                    <input class="form-control form-control-lg" type="time" name="invite_time"
                         value="{{ old('invite_time') }}" />
                    @error('invite_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="text-center mt-5">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary">Invite</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote();
    });
</script>

@endsection
