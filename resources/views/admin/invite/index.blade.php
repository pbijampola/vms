@extends('admin.layout2.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('INVITATIONS') }}</h4>
                {{-- <div class="row d-flex">

                </div> --}}
                <div class="text-right">
                    <button type="button" class="btn btn-primary"><a href='{{ route('invitee.create') }}' class="text-white">Add Invitation</a></button>
              </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Invitee Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th>Host</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitees as $key => $inv)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $inv->name }}</td>
                                    <td>{{ $inv->email }}</td>
                                    <td>{{ $inv->mobile_number }}</td>
                                    <td>{{ $inv->host}}</td>
                                    <td>{{ $inv->invite_date}}</td>
                                    <td>{{ $inv->invite_time}}</td>
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('department.show', $inv->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('invitee.edit', $inv->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('invitee.destroy', $inv->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mr-1"><i
                                                            class="ti-trash"></i>Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
