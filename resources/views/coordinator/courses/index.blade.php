@extends('layouts.coordinatordashboard')

@section('content')

       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Create Courses</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#">Courses</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        {{-- create  --}}
                        <div>
                            <p>
                                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample">
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <form action="{{ route('courses.store') }}" method="post">
                                    @csrf
                                    <div class="card card-body row">
                                        <div class="col-sm col-md-5">
                                            <div class="form-group">
                                                <label for="course">Course Name</label>
                                                <input type="text" class="form-control" id="course" name="name" required placeholder="Enter Course Name">
                                            </div>
                                        </div>
                                        <div class="col-sm col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                            {{-- alert --}}
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <h3 class="box-title">Course Table</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Course Name</th>
                                            <th class="border-top-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {{-- listing --}}
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $course->name }}</td>
                                            <td> 
                                                <div class="d-flex">
                                                    {{-- Edit --}}
                                                    <form action="{{ route('courses.destroy',  $course->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn" type="submit"><i class="fas fa-edit text-primary" aria-hidden="true"></i></button>
                                                    </form>
                                                    {{-- delete --}}
                                                    <form action="{{ route('courses.destroy',  $course->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn" type="submit"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                                                    </form>
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2020 © Anish</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
@endsection