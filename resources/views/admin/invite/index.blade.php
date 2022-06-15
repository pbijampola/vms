@extends('admin.layout2.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('INVITATIONS') }}</h4>
                {{-- <div class="row d-flex">

                </div> --}}
                <div class="text-right">
                    <button class='btn btn-md' style="background-color: #FEFE69">Export pdf</button>
                    <button class='btn btn-md' style="background-color: #DDF969">Export csv</button>
                    <a href='{{ route('invitee.create') }}' class=" btn btn-md" style="background-color: #A9F36A">Invite</a>

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
                                                    <button type="submit" class="btn btn-danger mr-1" onclick="return confirm('Are You Sure To Delete')"><i
                                                            class="ti-trash"></i>Delete</button>
                                                </form>
                                                {{-- <a href="{{ route('invitee.destroy',$inv->id) }}" class="btn btn-danger btn-sm"
                                                    data-tr="tr_{{$inv->id}}"
                                                    data-toggle="confirmation"
                                                    data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                                                    data-btn-ok-class="btn btn-sm btn-danger"
                                                    data-btn-cancel-label="Cancel"
                                                    data-btn-cancel-icon="fa fa-chevron-circle-left"
                                                    data-btn-cancel-class="btn btn-sm btn-default"
                                                    data-title="Are you sure you want to delete ?"
                                                    data-placement="left" data-singleton="true">
                                                     Delete
                                                 </a> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $invitees->links() !!}
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });


            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();


                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


                return false;
            });
        });
    </script>


@endsection


