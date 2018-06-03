@extends('layouts.liberty')

@section('content')
    @include('partials.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    @for($i=0;$i<21;$i++)
                    <div class="col-md-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Title</h4>
                                <p class="card-description">
                                    Form Description
                                </p>
                                <div class="card" >
                                    <div class="card-body">
                                       <div class="row">
                                           <button class="btn btn-outline-primary icon-btn ml-2 mb-2" data-toggle="tooltip" data-placement="top" data-original-title="Archive this form" data-custom-class="tooltip-info"><i class="mdi mdi-archive"></i></button>
                                           <button class="btn btn-outline-warning icon-btn ml-2 mb-2" data-toggle="tooltip" data-placement="top" data-original-title="Edit" data-custom-class="tooltip-info"><i class="fa fa-edit"></i></button>
                                           <button class="btn btn-outline-info icon-btn ml-2 mb-2" data-toggle="tooltip" data-placement="top" data-original-title="View Form Data" data-custom-class="tooltip-info"><i class="fa fa-table"></i></button>
                                           <button class="btn btn-outline-danger icon-btn ml-2 mb-2" data-toggle="tooltip" data-placement="top" data-original-title="Delete" data-custom-class="tooltip-info"><i class="fa fa-trash"></i></button>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('liberty/js/tooltips.js') }}"></script>
    <script src="{{ asset('liberty/js/alerts.js') }}"></script>
@endsection
