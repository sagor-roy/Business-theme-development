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
                                        <li class="breadcrumb-item active" aria-current="page">Edit Offer Section</li>
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
                                @foreach($offer as $row)
                                <form action="{{ route('admin.offerEdit',$row->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Icon</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <i style="font-size: 50px;" class="{{ $row->icon }}"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Icon Name</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <input type="text" name="name" value="{{ $row->icon }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4">
                                                <label for="logo">Content</label>
                                            </div>
                                            <div class="col-xl-8 col-lg-8">
                                                <textarea name="text" id="logo" rows="3" class="form-control">{{ $row->content }}</textarea>
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
