@extends('admin.layout2.master')

@section('content')

<div class="text-center mt-4">
    <h1 class="h2">Edit Invitation</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('invitee.update',$invitee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label class="form-label">Invitee Name</label>
                    <input class="form-control form-control-lg" type="text" name="name"
                        value="{{ $invitee->name}}" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input class="form-control form-control-lg" type="text" name="mobile_number"
                         value="{{$invitee->mobile_number}}" />
                    @error('mobile_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="text" name="email" value="{{$invitee->email}}" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Host</label>
                    <input class="form-control form-control-lg" type="text" name="host"
                         value="{{$invitee->host}}" />
                    @error('host')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Purpose</label>
                   <textarea class="form-control" name="purpose">{{$invitee->purpose}}</textarea>
                    @error('purpose')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Invitation Date</label>
                    <input class="form-control form-control-lg" type="date" name="invite_date"
                         value="{{$invitee->invite_date}}" />
                    @error('invite_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Invitation Time</label>
                    <input class="form-control form-control-lg" type="time" name="invite_time"
                         value="{{$invitee->invite_time}}" />
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

@endsection
