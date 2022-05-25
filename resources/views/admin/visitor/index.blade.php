@extends('admin.layout2.master')
@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CATEGORY</h4>
                <div class="text-right">
                    <button class='btn btn-danger'>Export pdf</button>
                    <a href='{{ route('visitor.create') }}' class=" btn btn-primary text-white opacity-7">Add New Visitor</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitors as $key => $visitor)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $visitor->name }}</td>
                                    <td>{{ $visitor->phone_number }}</td>
                                    <td>{{ $visitor->email }}</td>
                                    <td>{{ $visitor->address }}</td>
                                    <td>{{ $visitor->gender }}</td>
                                    <td>{{ $visitor->status }}</td>
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('visitor.show', $visitor->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('visitor.edit', $visitor->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('visitor.destroy', $visitor->id) }}"
                                                    method="POST">
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
