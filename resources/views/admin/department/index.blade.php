@extends('admin.layout2.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('DEPARTMENT') }}</h4>
                <div class="text-right">
                    <button class='btn btn-md' style="background-color: #FEFE69">Export pdf</button>
                    <button class='btn btn-md' style="background-color: #DDF969">Export csv</button>
                    <a href='{{ route('department.create') }}' class=" btn btn-md" style="background-color: #A9F36A">Add Department</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Department Name</th>
                                <th>Office Number</th>
                                <th>Head of Department</th>
                                <th>Assistant of Department</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $key => $dept)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $dept->department_name }}</td>
                                    <td>{{ $dept->office_number }}</td>
                                    <td>{{ $dept->hod }}</td>
                                    <td>{{ $dept->assistant }}</td>
                                    <td>{{ $dept->description }}</td>
                                    {{-- <td>{{ $user->department }}</td> --}}
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('department.show', $dept->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('department.edit', $dept->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{ route('department.destroy', $dept->id) }}"
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
    @include('admin.department.modal.edit')
@endsection
