<!DOCTYPE html>
<html lang="en">

@include('admin.layout2.head')

<body>
    <div class="wrapper">
        @include('admin.layout2.sidebar')

        <div class="main">
            @include('admin.layout2.navbar')

            <main class="content">
                {{-- <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

                    <div class="row">
                        <div class="col-xl-12 col-xxl-5 d-flex">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">{{__('VISITORS')}}</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">2.382</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger"> <i
                                                            class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                                    <span class="text-muted">Since last week</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">{{__('INVITEES')}}</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">14.212</h1>
                                                <div class="mb-0">
                                                    <span class="text-success"> <i
                                                            class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                                    <span class="text-muted">Since last week</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">{{__('USERS')}}</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">$21.300</h1>
                                                <div class="mb-0">
                                                    <span class="text-success"> <i
                                                            class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                                    <span class="text-muted">Since last week</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">{{__('EMPLOYEES')}}</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">64</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger"> <i
                                                            class="mdi mdi-arrow-bottom-right"></i> 2 </span>
                                                    <span class="text-muted">Since last week</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>





                </div> --}}
                @yield('content')
                @include('notify::components.notify')

            </main>

            @include('admin.layout2.footer')
        </div>
    </div>

    @include('admin.layout2.script')

</body>
@include('admin.layout2.summernote')

</html>
