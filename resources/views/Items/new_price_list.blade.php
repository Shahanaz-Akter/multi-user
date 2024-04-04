@extends('layouts.master')
@section('title')
<title>New Price List</title>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y ">

        <h4>New Price List</h4>
        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3" action="{{url('/post_items')}}">


                                    <div class="col-md-6">
                                        <label class="form-label text-danger">Name*</label>
                                        <input type="text" class="form-control" placeholder="Item Name" name="item_name" />
                                    </div>


                                    <div class="col-md-12">
                                        <label class="form-label">Transaction Type</label>
                                        <input type="radio" id="sku" placeholder="" name="sku" />
                                        <label class="" for="sku">Sales</label>

                                        <input type="radio" id="purchase" placeholder="" name="sku" />
                                        <label for="purchase" class="">purchase</label>

                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label text-danger">Price List Type</label>
                                        <div class="d-flex">
                                            <div class="col-md-4 bg-light p-4">
                                                <input onclick="view_all()" type="radio" id="all" placeholder="" name="all" />
                                                <label class="" for="all">All Items</label> <br>
                                                <small>Markup or mark down rate up for all items</small>
                                            </div>

                                            <div class="col-md-4 bg-light p-4" style="margin-left: 20px;">
                                                <input onclick="view_individual()" type="radio" id="individual" placeholder="" name="individual" />
                                                <label class="" for="individual">Individual items</label><br>
                                                <small>Customise the rate for each item individually</small>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- internal code............. -->


                                    <div class="col-md-6">
                                        <label name="des" class="form-label" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="" cols=""></textarea>
                                    </div>
                                    <!-- percentages tag -->

                                    <div class="col-md-6"></div>

                                    <!-- Button with dropdowns & addons -->

                                    <div class="col-md-6">
                                        <label name="perchantage" class="form-label" for="basic-default-email"><b style="color:red;">Description</b> </label>

                                        <div class="card mb-4">

                                            <div class=" demo-vertical-spacing demo-only-element">
                                                <div class="input-group">
                                                    <button class="bg-primary text-white btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Markup</button>

                                                    <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                                                    <button class="btn btn-outline-primary " type="button" data-bs-toggle="dropdown" aria-expanded="false">%</button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Markup</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Markup Dropdown</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>


                                    <div class="col-md-6">
                                        <label class="form-label">Round Off to</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Never Mind</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6"></div>

                                    <div class="col-md-12  d-none">
                                        <label>Pricing scheme</label>
                                        <input type="radio" placeholder="" name="sku" />
                                        <label for="sales">Unit Pricing</label>

                                        <input type="radio" id="sales" placeholder="" name="sku" />
                                        <label>Volume pricing</label>

                                    </div>

                                    <div class="col-md-6  d-none">
                                        <label class="form-label">Currency</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12  d-none">
                                        <label class="text-danger">Discount*</label>

                                        <input type="checkbox" placeholder="Item Name" name="item_name" />
                                        <label class="">I want to include discount perchantages for the items </label>

                                    </div>

                                    <div class="col-md-12 " style="margin-left: 900px;">
                                        <span class="switch-label">Import Price List for Items</span>
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input" />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>

                                        </label>
                                    </div>
                            </div>
                            <br><br>
                            <div class="mt-2 col-md-6" style="margin-left: 30px;">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                            </form>
                        </div>
                    </div>
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
    const view_all = () => {
        let all = document.querySelector('#all');
        // if () {

        // } else {

        // }
        console.log(all);
    }

    const view_individual = () => {
        let individual = document.querySelector('#individual');
        console.log(individual);

    }
</script>
@endsection