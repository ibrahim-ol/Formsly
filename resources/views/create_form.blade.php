@extends("layouts.liberty")

@section('content')
    @include('partials.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title"> Create your form </h2>

                                <form class="form-inline repeater" method="post">
                                    @csrf
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="d-flex mb-2">
                                            <label class="sr-only" for="inlineFormInputGroup1">Label</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup1" placeholder="Add label">
                                            </div>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <label class="sr-only">Select Input type</label>
                                                <select class="js-example-basic-single form-control" >
                                                    <option>Add Input Type</option>
                                                    <option value="AL">Text</option>
                                                    <option value="WY">Number</option>
                                                    <option value="AM">Radio</option>
                                                    <option value="CA">Select</option>
                                                    <option value="RU">CheckBox</option>

                                                </select>
                                            </div>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <label class="sr-only">Placeholder</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="Add Placeholder">
                                            </div>

                                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2" >
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button data-repeater-create type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2">
                                        <i class="mdi mdi-plus"></i>
                                    </button>

                                        <button type="button" class="btn btn-success btn-sm ml-2 mb-2">Preview Form</button>
                                        <button type="submit" class="btn btn-success btn-sm ml-2 mb-2">Create Form</button>

                                </form>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('liberty/js/form-repeater.js') }}"></script>
@endsection