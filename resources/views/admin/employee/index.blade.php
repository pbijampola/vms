@extends('admin.layout2.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('EMPLOYEES') }}</h4>
                <div class="row d-flex">
                    <div class="text-right">
                        <button class='btn btn-md' style="background-color: #FEFE69">Export pdf</button>
                        <button class='btn btn-md' style="background-color: #DDF969">Export csv</button>
                        <a href='{{ route('employee.create') }}' class=" btn btn-md" style="background-color: #A9F36A">Add Employee</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>image</th>
                                <th>Employee Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Department</th>
                                <th>Employee Id</th>
                                <th>Employee Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $key => $emp)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td><img src="{{ $emp->getFirstMediaUrl('images', 'thumb') }}" / width="120px"></td>
                                    <td>{{ $emp->employee_name }}</td>
                                    <td>{{ $emp->email }}</td>
                                    <td>{{ $emp->phone_number }}</td>
                                    <td>{{ $emp->department }}</td>
                                    <td>{{ $emp->employee_id }}</td>
                                    <td>{{ $emp->employee_role }}</td>
                                    {{-- <td>{{ $user->department }}</td> --}}
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('department.show', $emp->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('employee.edit', $emp->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('employee.destroy', $emp->id) }}" method="POST">
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
                    {!! $employees->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
