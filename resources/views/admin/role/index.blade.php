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
                        <a href='{{ route('role.create') }}' class=" btn btn-md" style="background-color: #A9F36A">Add Employee</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $rol)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{{$rol->name}}}</td>
                                    <td>
                                        <div class='d-flex'>
                                            <div>
                                                <a href="{{ route('role.show', $rol->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-eye"></i>More</a>
                                            </div>
                                            <div>
                                                <a href="{{ route('role.edit', $rol->id) }}"
                                                    class="btn btn-primary mr-1"><i class="ti-pencil"></i>Edit</a>
                                            </div>
                                           @cannot('delete role')
                                           <div>
                                            <form action="{{ route('role.destroy', $rol->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mr-1"><i
                                                        class="ti-trash"></i>Delete</button>
                                            </form>
                                        </div>
                                           @endcannot
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
