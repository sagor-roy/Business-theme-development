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
                                        <li class="breadcrumb-item active" aria-current="page">Head</li>
                                        <a href="#" class="btn btn-primary ml-auto">New Task</a>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- heading body content -->
                <div class="body_content my-4">
                    <div class="row">
                        {{-- logo --}}
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            @if(session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success !</strong> {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <div class="content_section">
                                <h5>Navbar Logo</h5>
                                <hr>
                                <form action="{{ route('admin.logoUpdate') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach($view as $row)
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="logo">Logo</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <img class="img-fluid" src="{{ asset($row->img) }}" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="logo">Update Logo</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <div class="custom-file">
                                                    <input type="file" name="logo" class="form-control" id="logo">
                                                </div>
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
                                </form>
                            </div>
                            {{-- Address --}}
                                @if(session('addMessage'))
                                    <div class="alert alert-success alert-dismissible mt-4 fade show" role="alert">
                                        <strong>Success !</strong> {{ session('addMessage') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            <div class="content_section my-4">
                                <h5>Address</h5>
                                <hr>
                                @foreach($add as $row)
                                <form action="{{ route('admin.addressUpdate') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="fb">Company Name</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <input type="text" id="fb" name="name" value="{{ $row->name }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="fb">Email</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <input type="text" id="fb" name="email" value="{{ $row->email }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="fb">Number</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <input type="text" id="fb" name="number" value="+880 {{ $row->number }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="fb">Address</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <textarea name="add" class="form-control" id="" cols="30" rows="3">{{ $row->add }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3">
                                                <label for="fb">Short Descrpiption</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-9">
                                                <textarea name="desc" class="form-control" id="" cols="30" rows="5">{{ $row->desc }}</textarea>
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
                                </form>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            {{-- social link --}}
                            @if(session('socialMessage'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success !</strong> {{ session('socialMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section">
                                <h5>Social Link</h5>
                                <hr>
                                @foreach($link as $row)
                                    <form action="{{ route('admin.socialUpdate') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <i class="{{ $row->f_icon }}"></i>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="form-group">
                                                                <input type="text" name="f_icon" value="{{ $row->f_icon }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7">
                                                    <input type="text" id="fb" name="f_link" value="{{ $row->f_link }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <i class="{{ $row->s_icon }}"></i>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="form-group">
                                                                <input type="text" name="s_icon" value="{{ $row->s_icon }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7">
                                                    <input type="text" id="fb" name="s_link" value="{{ $row->s_link }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <i class="{{ $row->t_icon }}"></i>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="form-group">
                                                                <input type="text" name="t_icon" value="{{ $row->t_icon }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7">
                                                    <input type="text" id="fb" name="t_link" value="{{ $row->t_link }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <i class="{{ $row->fo_icon }}"></i>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="form-group">
                                                                <input type="text" name="fo_icon" value="{{ $row->fo_icon }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7">
                                                    <input type="text" id="fb" name="fo_link" value="{{ $row->fo_link }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-5">
                                                </div>
                                                <div class="col-xl-7 col-lg-7">
                                                    <input type="submit" class="btn btn-primary" value="Update">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>

                            {{-- bottom footer --}}
                            @if(session('copyMessage'))
                                <div class="alert alert-success alert-dismissible mt-4 fade show" role="alert">
                                    <strong>Success !</strong> {{ session('copyMessage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="content_section my-4">
                                <h5>Bottom Footer</h5>
                                <hr>
                                @foreach($copy as $row)
                                    <form action="{{ route('admin.copyRight') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3">
                                                    <label for="fb">Copyright</label>
                                                </div>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="name" id="fb" value="{{ $row->name }}" class="form-control">
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
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->

@endsection
{{-- end --}}
