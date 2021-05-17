{{-- main layout include --}}
@extends('backend.layout.master')

{{-- main content start --}}
@section('main')
<!-- breadcrumb start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="breadcrumb-link"><span class="p-1 text-sm text-light bg-success rounded-circle"><i class="fas fa-home"></i></span> Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="breadcrumb-link">Home Page</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Staff Section</li>
                                        <a href="#" class="btn btn-primary ml-auto">New Task</a>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <!-- home body content -->  --}}
                <div class="home_section my-4">
                    <div class="row my-4">
                        <div class="col-xl-8 col-lg-8 col-md-8 mx-auto">
                            @if(session('editMessage') || session('errorMessage') || $errors->any())
                                <div class="alert alert-{{ session('editMessage') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                    <strong>{{ session('editMessage') ? 'Success':'Oops' }} !</strong> {{ session('editMessage')}} {{ session('errorMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section">
                                <h5>Section Update</h5>
                                <hr>
                                @foreach($show as $row)
                                <form action="{{ route('admin.workUpdate',$row->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Image</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <img width="50%" src="{{ asset($row->img) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Select Image</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="file" class="form-control" name="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Name</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="name" class="form-control" value="{{ $row->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Profession</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" class="form-control" value="{{ $row->prof }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Facebook Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="fb" class="form-control" value="{{ $row->fb }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Twitter Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="twit" class="form-control" value="{{ $row->twit }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Instagram Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="insta" class="form-control" value="{{ $row->insta }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Linkedin Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="link" class="form-control" value="{{ $row->link }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">YouTube Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="you" class="form-control" value="{{ $row->you }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label for="logo">Pinterest Link</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="pin" class="form-control" value="{{ $row->pin }}" placeholder="( Empty )">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="submit" class="btn btn-primary" value="Update">
                                                <a href="{{ route('admin.home') }}" class="btn btn-warning text-light">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <!-- end -->  --}}

@endsection
{{-- end --}}
