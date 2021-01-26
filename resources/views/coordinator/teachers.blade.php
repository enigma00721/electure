@extends('layouts.coordinatordashboard')
@section('content')
    <div class="page-wrapper">
        {{-- Bread crumb  --}}
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Create Teachers</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ml-auto">
                            <li><a href="#">Teachers</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        {{-- Container --}}
        <div class="container-fluid">
            {{-- Start Page Content --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        {{-- session message --}}
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                        @endif
                        {{-- create  --}}
                        <div>
                            <p>
                                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#createTeacher">
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                </button>
                            </p>
                            <div class="collapse" id="createTeacher">
                                <form action="{{ route('teacher.new') }}" method="post">
                                    @csrf
                                    <div class="card card-body bg-light row">
                                        <div class="col-sm">
                                            <div class="form-group row">
                                                {{-- name --}}
                                                <div class="mb-2 col-md-3 col-sm">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" required placeholder="Enter Teacher Name"
                                                    value="{{ old('name') }}">
                                                    @error('name')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- email --}}
                                                <div class="mb-2 col-md-3 col-sm">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" required placeholder="Enter Teacher Email"
                                                    value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- password --}}
                                                <div class="mb-2 col-md-3 col-sm">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" required placeholder="Enter Teacher Password"
                                                    value="{{ old('password') }}">
                                                    @error('password')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- repeat password --}}
                                                <div class="mb-2 col-md-3 col-sm">
                                                    <label for="password_confirmation">Repeat Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required placeholder="Enter Teacher Password"
                                                    value="{{ old('password_confirmation') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- table --}}
                        <h3 class="box-title">Teacher Table</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Teacher Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Role</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($teachers->count())
                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $teacher->name }}</td>
                                                <td>{{ $teacher->email }}</td>
                                                <td>{{ $teacher->role }}</td>
                                                <td style="padding: 10px">
                                                    <div class="d-flex">
                                                        {{-- update modal trigger --}}
                                                        <button type="submit" class="btn bg-white border-white edit-teacher" 
                                                        data-toggle="modal" data-target="#editModal"
                                                        id="{{$teacher->id}}"
                                                        name="{{$teacher->name}}" 
                                                        email="{{$teacher->email}}"
                                                        >
                                                            <i class="fas fa-edit text-primary" aria-hidden="true"></i>
                                                        </button>
                                                        {{-- delete --}}
                                                        <form action="{{ route('teacher.delete', $teacher->id) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn bg-white border-white">
                                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Modal -->
            <div class="modal fade" id="editModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        {{-- title --}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Teacher</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {{-- name --}}
                                <div class="mb-2">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control name" required placeholder="Enter Teacher Name"
                                    value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- email --}}
                                <div class="mb-2">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control email" required placeholder="Enter Teacher Email"
                                    value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- password --}}
                                <div class="mb-2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control password" required placeholder="Enter Teacher Password"
                                    value="{{ old('password') }}">
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- confirm password --}}
                                <div class="mb-2">
                                    <label for="password_confirmation">Repeat Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" required placeholder="Enter Teacher Password"
                                    value="{{ old('password_confirmation') }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{-- submit update --}}
                            <form id="updateSubmitForm" action="" method="post">
                                @csrf
                                @method('patch')
                                <button id="save" class="btn btn-primary submit-edit">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <footer class="footer text-center"> 2020 © Anish</footer>
    </div>
@endsection


@section('script')
{{-- BOOTSTRAP MODAL show.bs.modal NOT WORKING --}}
    <script>
        $(document).ready(function(){
            // on button click
            $(document).on('click', '.edit-teacher', function(event){
                // get selected value from table
                var id = this.getAttribute("id");
                var name = this.getAttribute("name");
                var email = this.getAttribute("email");
                console.log({id, email})
                // store table value in modal
                var parent = $("#editModal"); 
                $(".name", parent).val(name) ;
                $(".email", parent).val(email) ;
                $(".password", parent).val('') ;
                $("#updateSubmitForm", parent).attr('action', `http://localhost:8000/teacher/${id}`);
            });

            $(document).on('click', '.submit-edit', function(event){
                // $("#updateSubmitForm").submit();
            });

        });
    </script>
@endsection
