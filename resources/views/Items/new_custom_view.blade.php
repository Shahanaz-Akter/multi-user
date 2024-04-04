@extends('layouts.master')
@section('title')
<title>New Custom View</title>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">

        <h4>New Custom View</h4>

        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                            <form class="accordion-body form-repeater">
                                <div class="row">

                                    <div class="row col-md-6 mb-5">
                                        <label class="col-sm-2" for="select2Basic">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="" />
                                        </div>

                                    </div>

                                    <div class="row col-md-6 mb-5">
                                        <div class="col-sm-1 ms-2">
                                            <input type="checkbox" class="" name="" id="select2Basic" />
                                        </div>
                                        <label class="col-sm-9" for="select2Basic">Mark as Favourite</label>

                                    </div>

                                    <!-- Form Repeater -->
                                    <div class="form-repeater card-body" style="padding: 0px!important;">
                                        <div data-repeater-list=" group-a">
                                            <div data-repeater-item>
                                                <div class="row">

                                                    <div class="mb-3 col-md-3 mb-2">
                                                        <label class="" for="select2Basic">Select a Field</label>
                                                        <div class="">
                                                            <select class="select2 form-select">
                                                                <option value="">Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="WV">West Virginia</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-md-3 mb-2">
                                                        <label class="" for="select2Basic">Select a Criteria</label>
                                                        <div class="">
                                                            <select class="select2 form-select">
                                                                <option value="">Select</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="WV">West Virginia</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-md-3 mb-2">
                                                        <label class="" for="select2Basic"></label>
                                                        <div class="">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3  d-flex align-items-center mb-2">
                                                        <div class="btn btn-label-danger" data-repeater-delete>
                                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="btn btn-primary" data-repeater-create>
                                            <i class="bx bx-plus"></i>
                                            <span class="align-middle">Add Criteria</span>
                                        </div>
                                    </div>
                                    <!-- /Form Repeater -->

                                    <div class="row col-md-6 mb-2 mt-5">
                                        <label class="" for="select2Basic">Colums Preference: </label>
                                    </div>

                                    <div class="row col-md-6 mb-2"> </div>

                                    <div class="mb-3 col-md-6 mb-5">
                                        <label class="col-sm-3" for="select2Basic">Available Columns</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-select">
                                                <option value="">Select</option>
                                                <option value="AK">Alaska</option>
                                                <option value="WV">West Virginia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6 mb-5">
                                        <label class="col-sm-3" for="select2Basic">Selected Columns</label>
                                        <div class="col-sm-9">
                                            <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="" cols=""></textarea>
                                        </div>
                                    </div>

                                    <div class="row col-12 col-md-6 mb-2">
                                        <label class="" for="select2Basic">Visibility preference: </label>
                                    </div>


                                    <div class="col-md-12 mb-5">
                                        <label class="">Make This Visible To:</label>

                                        <input class="ms-4" id="onlyme" name="" type="radio" value="" />
                                        <label for="onlyme">Onlyme</label>

                                        <input class="ms-4" id="sel" name="" type="radio" value="" />
                                        <label for="sel" onclick="selected_rows()">Only Selected User and Rows</label>

                                        <input class="ms-4" id="everyone" name="" type="radio" value="" />
                                        <label for="everyone">Everyone</label>

                                    </div>

                                    <div class="d-flex col-md-6 mb-5 d-none" id="slct">
                                        <label class="col-sm-4">Select Users and Roles</label>
                                        <input type="text" class="col-sm-5 form-control" name="" value="" />
                                    </div>

                                    <hr>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<script>
    const selected_rows = () => {
        let s = document.querySelector('#slct');
        let T = s.classList.contains('d-none');
        console.log(T);
        if (T) {
            s.classList.remove('d-none');

        } else {
            s.classList.add('d-none');
        }
    }
</script>

@endsection