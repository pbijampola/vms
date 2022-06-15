@extends('admin.layout2.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-left">All Users</h4>
                <div class="text-right">
                    <button class='btn btn-primary'>Export pdf</button>
                    <a href='{{ route('user.create') }}' class=" btn btn-primary text-white">Add New User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                {{-- <th><img src="{{$users->getFirstMediaUrl('photos','thumb')}}" / width="120px"></th> --}}
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->photo }}</td>
                                    <td>{{ $user->department }}</td>
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('user.show', $user->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mr-1" onclick="return confirm('Are You Sure To Delete')"><i
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
