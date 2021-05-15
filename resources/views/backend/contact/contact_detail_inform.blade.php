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
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Contact Message</a></li>
                            @foreach($show as $row)
                            <li class="breadcrumb-item active" aria-current="page">{{ ucwords($row->name) }}</li>
                            @endforeach
                            <a href="#" class="btn btn-primary ml-auto">New Task</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- conact detail inform content -->
    @foreach($show as $row)
    <div class="data_table mt-4">
        <div class="content_section">
            <h5>Detail Information</h5>
            <hr>
            <div class="detail_card">
                <!-- From -->
                <div class="card_heading">
                    <p>From</p>
                </div>
                <div class="card_body">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="left_td">Name</td>
                            <td class="right_td">{{ ucwords($row->name) }}</td>
                        </tr>
                        <tr>
                            <td class="left_td">Email</td>
                            <td class="right_td">{{ $row->email }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- Subject -->
                <div class="card_heading">
                    <p>Subject</p>
                </div>
                <div class="card_body">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="left_td">Subject Message</td>
                            <td class="right_td text-justify">
                               {{ $row->sub }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Message -->
                <div class="card_heading">
                    <p>Full Message</p>
                </div>
                <div class="card_body">
                    <table class="table mb-0">
                        <tbody>
                        <tr>
                            <td class="left_td">Message</td>
                            <td class="right_td text-justify">
                              {{ $row->message }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- end -->

@endsection
{{-- end --}}
