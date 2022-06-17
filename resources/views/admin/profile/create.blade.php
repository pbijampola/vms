@extends('admin.layout2.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile Details</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{asset('static/img/avatars/avatar-4.jpg')}}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                {{-- <img class="rounded-circle" src="{{$user->getFirstMediaUrl('images','thumb')}}" / width="120px" alt="IMAGE"> --}}

                <div class="text-muted mb-4">
                    <h5 class="card-title mb-0">{{$user->name}}</h5>
                </div>
            </div>
            <hr class="my-0" />
        </div>
    </div>
    <div class="col-md-4 col-xl-7">
       <div class="card mb-3">
        <div class="card-body">
            <h5 class="h6 card-title mb-0">About</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span>Phone Number <a href="#">{{$user->phone_number}}</a></li>
                <li class="mb-1"><span data-feather="at-sign" class="feather-sm me-1"></span> Email <a href="#">{{$user->email}}</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Location <a href="#">{{$user->address}}</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Gender <a href="#">{{$user->gender}}</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Role <a href="#">{{$user->role}}</a></li>

            </ul>
        </div>
       </div>
    </div>
</div>
@endsection
