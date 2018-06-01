@extends('layouts.liberty')

@section('content')
    @include('partials.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('liberty/js/alerts.js') }}"></script>
@endsection
