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

                                <form class="form-inline repeater" method="post" action="create" >
                                    @csrf
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="d-flex mb-2" class="grid-margin">
                                            <label class="sr-only" for="inlineFormInputGroup1">Label</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup1" placeholder="Add label" name="label" required>
                                            </div>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <label class="sr-only">Select Input type</label>
                                                <select class="js-example-basic-single form-control" name="type" required >
                                                    <option>Add Input Type</option>
                                                    <option value="Text">Text</option>
                                                    <option value="Number">Number</option>
                                                    <option value="Radio">Radio</option>
                                                    <option value="Select">Select</option>
                                                    <option value="CheckBox">CheckBox</option>

                                                </select>
                                            </div>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <label class="sr-only">Placeholder</label>
                                                <input type="text" class="form-control form-control-sm" name="placeholder" placeholder="Add Placeholder" required>
                                            </div>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <button type="button" class="btn btn-info btn-sm sr-only" data-toggle="modal" data-target="#exampleModal-3" id="option-btn"><i class="fa fa-list ml-1"></i>Options</button>
                                            </div>
                                            <input type="hidden" name="options" value="" class="opt">

                                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2 caller" >
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button data-repeater-create type="button" class="btn btn-info btn-sm  ml-2 mb-2 caller" >
                                        <i class="mdi mdi-plus"> Add New Field</i>
                                    </button>
                                    <button type="button" class="btn btn-info btn-sm btn-block  mb-1"><i class="fa fa-print"></i>Preview Form</button>
                                    <button type="submit" class="btn btn-success  btn-block btn-lg  mb-2"><i class="mdi mdi-content-save"></i>Create Form</button>

                                </form>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-3">Add Options for field</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="options-list"></div>
                    <input type="text" class="form-control mb-1">
                    <button type="button" class="btn btn-success" id="option-add-to-list"><i class="mdi mdi-plus"></i>Add</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function noteChange() {
            $('.js-example-basic-single').inputOnChange(function(e){
                if(this.value == 'Select' || this.value == 'Radio' || this.value == 'CheckBox'){
                    var field = $(this).parent().parent();
                    var btn = field.find('#option-btn');
                    btn.removeClass('sr-only');
                    btn.on('click',function (ev) {
                       var glo = field.find('.opt');
                       var f = glo[0].value ;
                       console.log(f);
                        $('#options-list').html('Add options')
                       if(f != ""){
                           f = f.split('|');
                           h = "";
                           for(i in f){
                               h += '<p class="badge-pill badge-primary">' + f[i] + "</p>";
                           }
                           $('#options-list').html(h);
                       }
                       console.log('next');
                        $('#option-add-to-list').on('click',function(ev){
                            console.log('here');
                            var hol = $('#options-list').parent().find('input')[0].value ;
                            if (hol != ""){
                                var ri = $('#options-list').html();
                                $('#options-list').html( ri + "<p class='badge-pill badge-primary'>" + hol + "</p>");
                                field.find('.opt')[0].value += "|"+hol;
                                $('#options-list').parent().find('input')[0].value = "";
                            }
                        });
                    });



                }else{
                    $(this).parent().parent().find('#option-btn').addClass('sr-only');
                }
            });
        }
        noteChange()

    </script>
    <script src="{{ asset('liberty/js/form-repeater.js') }}"></script>

@endsection