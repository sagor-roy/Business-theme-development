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
                                        <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                                        <a href="#" class="btn btn-primary ml-auto">New Task</a>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <!-- home body content -->  --}}
                <div class="home_section">
                    {{--  section status  --}}
                    <div class="content_section my-4">
                        <h5>Section Status</h5>
                        <hr>
                        <div class="row grid_system">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>01. Choose Us</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row)
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->choose == 'active' ? 'checked':'' }} class="choose">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>02. Our Offer</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row)
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->offer == 'active' ? 'checked':'' }} class="offer">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>03. Our Product</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox"{{ $row->product == 'active' ? 'checked':'' }} class="product">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>04. Experience Staff</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->staff == 'active' ? 'checked':'' }} class="staff">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>05. How it work</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->work == 'active' ? 'checked':'' }} class="work">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>06. Client Comment</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->client == 'active' ? 'checked':'' }} class="client">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>07. Center Image</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->center_img == 'active' ? 'checked':'' }} class="center_img">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>08. Our Feedback</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->feedback == 'active' ? 'checked':'' }} class="feedback">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>09. Our Partner</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->partner == 'active' ? 'checked':'' }} class="partner">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>10. Blog</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->blog == 'active' ? 'checked':'' }} class="blog">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <label for="fb"><strong>11. Click Here</strong></label>
                                        </div>
                                        @foreach ($sectionStatus as $row )
                                        <div class="col-xl-5 col-lg-5">
                                            <label class="switch">
                                                <input type="checkbox" {{ $row->click == 'active' ? 'checked':'' }} class="click">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  end  --}}
                    <div class="row">
                        <div class="col-12 mx-auto">
                            @if(session('homeMessage') || session('errorMessage'))
                                <div class="alert alert-{{ session('homeMessage') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                    <strong>{{ session('homeMessage') ? 'Success':'Oops' }} !</strong> {{ session('homeMessage')}} {{ session('errorMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Home Section</h5>
                                <hr>
                                @foreach ($homeSec as $row )
                                <form action="{{ route('admin.homeImg') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Home Image</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <img width="50%" class="img-fluid" src="{{ asset($row->img) }}" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Gradient Color</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <input type="text" name="color" id="swatches-opacity" class="demo form-control" data-format="rgb" data-opacity="1" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)" value="{{ $row->color }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Position</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <select name="position" id="logo" class="form-control">
                                                    <option value="scroll" {{ $row->position == 'scroll' ? 'selected':'' }}>Scroll</option>
                                                    <option value="fixed" {{ $row->position == 'fixed' ? 'selected':'' }}>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Update Image</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <input type="file" name="img" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Text</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <input type="text" name="text" id="logo" value="{{ $row->text }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Headline</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <textarea name="head" id="logo" class="form-control" rows="2">{{ $row->head }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                                <label class="mr-lg-4" for="logo">Button Name</label>
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <input type="text" name="btn" id="logo" value="{{ $row->btn }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 text-lg-right">
                                            </div>
                                            <div class="col-xl-5 col-lg-5">
                                                <input type="submit" class="btn btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 mx-auto">
                            @if(session('chooseMessage'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success !</strong> {{ session('chooseMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Choose Us Section</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5">
                                        @foreach($choose as $row)
                                            <form action="{{ route('admin.chooseHead') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Title</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="head" value="{{ $row->head }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Text</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <textarea name="text" class="form-control" rows="3">{{ $row->text }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="submit" class="btn btn-primary" value="Update">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-7 col-lg-7">
                                        {{--  choose card  --}}
                                        <table id="example" class="table table-striped table-bordered table-responsive-sm text-center">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Text</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($choose1 as $row)
                                                <tr>
                                                    <td>01</td>
                                                    <td>{{ $row->head }}</td>
                                                    <td>{{ substr($row->text,0,15).'.....' }}</td>
                                                    <td>
                                                        <img width="50px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="{{ route('admin.chooseUpdate',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($choose2 as $row)
                                                <tr>
                                                    <td>02</td>
                                                    <td>{{ $row->head }}</td>
                                                    <td>{{ substr($row->text,0,15).'.....' }}</td>
                                                    <td>
                                                        <img width="50px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="{{ route('admin.chooseUpdate',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($choose3 as $row)
                                                <tr>
                                                    <td>03</td>
                                                    <td>{{ $row->head }}</td>
                                                    <td>{{ substr($row->text,0,15).'.....' }}</td>
                                                    <td>
                                                        <img width="50px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="{{ route('admin.chooseUpdate',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($choose4 as $row)
                                                <tr>
                                                    <td>04</td>
                                                    <td>{{ $row->head }}</td>
                                                    <td>{{ substr($row->text,0,15).'.....' }}</td>
                                                    <td>
                                                        <img width="50px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="{{ route('admin.chooseUpdate',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mx-auto">
                            @if(session('offerMessage') || session('errorMessage'))
                                <div class="alert alert-{{ session('offerMessage') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                    <strong>{{ session('offerMessage') ? 'Success':'Oops' }} !</strong> {{ session('offerMessage')}} {{ session('errorMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Offer Section</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5">
                                        @foreach($offer as $row)
                                        <form action="{{ route('admin.offerUpdate') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="row mx-auto">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                        <label for="logo">Image</label>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <img class="img-fluid" src="{{ asset($row->img) }}" alt="logo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                        <label for="logo">Update Image</label>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <input type="file" name="img" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                        <label for="logo">Headline</label>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <textarea name="head" id="logo" class="form-control" rows="2">{{ $row->head }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                        <label for="logo">Text</label>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <input type="text" name="text" id="logo" value="{{ $row->text }}" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                        <label for="logo">Sub Headline</label>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <textarea name="subhead" id="logo" class="form-control" rows="2">{{ $row->sub_head }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 text-lg-right">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8">
                                                        <input type="submit" class="btn btn-primary" value="Update">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-7 col-lg-7">
                                        <table id="example2" class="table table-striped table-bordered text-center">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Icon</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($icon1 as $row)
                                            <tr>
                                                <td>01</td>
                                                <td><i class="{{ $row->icon }}"></i></td>
                                                <td>{{ $row->content }}</td>
                                                <td><a href="{{ route('admin.icon1',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            @endforeach
                                             @foreach($icon2 as $row)
                                            <tr>
                                                <td>01</td>
                                                <td><i class="{{ $row->icon }}"></i></td>
                                                <td>{{ $row->content }}</td>
                                                <td><a href="{{ route('admin.icon2',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            @endforeach
                                             @foreach($icon3 as $row)
                                            <tr>
                                                <td>01</td>
                                                <td><i class="{{ $row->icon }}"></i></td>
                                                <td>{{ $row->content }}</td>
                                                <td><a href="{{ route('admin.icon3',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            @endforeach
                                             @foreach($icon4 as $row)
                                            <tr>
                                                <td>01</td>
                                                <td><i class="{{ $row->icon }}"></i></td>
                                                <td>{{ $row->content }}</td>
                                                <td><a href="{{ route('admin.icon4',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Product Section--}}
                        <div class="col-12">
                            @if(session('headMessage') || session('errorMessage'))
                                <div class="alert alert-{{ session('headMessage') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                    <strong>{{ session('headMessage') ? 'Success':'Oops' }} !</strong> {{ session('headMessage')}} {{ session('errorMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Product Section</h5>
                                <hr>
                                <div class="product_card">
                                    {{--  product card  --}}
                                    <form action="{{ route('admin.proStore') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="logo">Select Img</label>
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="file" name="image" class="form-control">
                                                            @error('image')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="logo">Title</label>
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                                            @error('title')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="logo">Body</label>
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <textarea id="editor1" name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
                                                            @error('body')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                        </div>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <input type="submit" class="btn btn-primary" value="Create">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5">
                                        @foreach($product as $row)
                                            <form action="{{ route('admin.proHead') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Title</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="head" value="{{ $row->head }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Text</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <textarea name="text" class="form-control" rows="3">{{ $row->text }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="submit" class="btn btn-primary" value="Update">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-7 col-lg-7">
                                        {{--Edit Table--}}
                                        <table id="example1" class="table table-striped table-bordered table-responsive-sm text-center">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Text</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($show as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $row->title }}</td>
                                                    <td>{{ strip_tags(substr($row->content,0,30).'.....') }}</td>
                                                    <td>
                                                        <img width="70px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="{{ route('admin.proEdit',$row->id) }}" class="text-success mr-1"><i class="far fa-edit"></i></a>
                                                        <a onclick="return confirm('Are you sure to Delete?')" href="{{ route('admin.proDelete',$row->id) }}" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        </div>
                        {{--Experience Staff--}}
                        <div class="col-12">
                            @if(session('staffMessage') || session('errorMessage'))
                                <div class="alert alert-{{ session('staffMessage') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                    <strong>{{ session('staffMessage') ? 'Success':'Oops' }} !</strong> {{ session('staffMessage')}} {{ session('errorMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Staff Section</h5>
                                <hr>
                                <div class="product_card">
                                    {{--  staff card  --}}
                                    <form action="{{ route('admin.staffStore') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Select Img</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="file" name="img" class="form-control">
                                                            @error('img')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Name</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                                            @error('name')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Profession</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="profession" value="{{ old('profession') }}" class="form-control">
                                                            @error('profession')
                                                            <div class="text-danger font-italic">
                                                                <p><i class="fas fa-exclamation-circle"></i>{{ $message }}</p>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Facebook Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="fb" value="{{ old('fb') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Instagram Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="insta" value="{{ old('insta') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Twitter Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="twit" value="{{ old('twit') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Likedin Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Youtube Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="you" value="{{ old('you') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 text-lg-right">
                                                            <label class="pr-lg-2" for="logo">Pinterest Link</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="text" name="pin" value="{{ old('pin') }}" class="form-control" placeholder="( optional )">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6">
                                                            <input type="submit" class="btn btn-primary" value="Create">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5">
                                        @foreach($staffHead as $row)
                                            <form action="{{ route('admin.staffHead') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Title</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="text" name="head" value="{{ $row->head }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                    <label for="logo">Headline Text</label>
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <textarea name="text" class="form-control" rows="3">{{ $row->text }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-lg-3">
                                                                </div>
                                                                <div class="col-xl-9 col-lg-9">
                                                                    <input type="submit" class="btn btn-primary" value="Update">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-7 col-lg-7">
                                        {{--Edit Table--}}
                                        <table id="example1" class="table table-striped table-bordered table-responsive-sm text-center">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Profession</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($staff as $row)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>
                                                        {{ $row->prof }} <br> <br>
                                                        @if($row->fb == null)
                                                            @else
                                                        <i class="fab fa-facebook"></i>
                                                        @endif
                                                        @if($row->insta == null)
                                                        @else
                                                        <i class="fab fa-instagram"></i>
                                                        @endif
                                                        @if($row->twit == null)
                                                        @else
                                                        <i class="fab fa-twitter"></i>
                                                        @endif
                                                        @if($row->link == null)
                                                        @else
                                                        <i class="fab fa-linkedin"></i>
                                                        @endif
                                                        @if($row->you == null)
                                                        @else
                                                        <i class="fab fa-youtube"></i>
                                                        @endif
                                                        @if($row->pin == null)
                                                        @else
                                                        <i class="fab fa-pinterest"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <img width="70px" src="{{ asset($row->img) }}" alt="">
                                                    </td>
                                                    <td><a href="" class="text-success mr-1"><i class="far fa-edit"></i></a>
                                                        <a onclick="return confirm('Are you sure to Delete?')" href="" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
                {{--  <!-- end -->  --}}

@endsection
{{-- end --}}
