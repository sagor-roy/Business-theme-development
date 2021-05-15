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
                                        <li class="breadcrumb-item active" aria-current="page">Edit Choose Us</li>
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
                            @if(session('editMessage'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success !</strong> {{ session('editMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section">
                                <h5>Section Update</h5>
                                <hr>
                                @foreach($choose1 as $row)
                                <form action="{{ route('admin.chooseEdit',$row->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Card Image</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <img width="40%" class="d-block" src="{{ asset($row->img) }}" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Update Image</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="file" name="img" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Headline</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="head" id="logo" value="{{ $row->head }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Text</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <textarea name="text" id="logo" class="form-control" rows="3">{{ $row->text }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
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
