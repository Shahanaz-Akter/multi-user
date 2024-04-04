@extends('layouts.master')
@section('title')
<title>New Composite Items</title>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y ">

        <h4>New Composite Items</h4>
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

                                    <div class="col-md-6 dropzone needsclick" id="dropzone-basic" style="width: 200px; height: 100px; padding: 2px !important;">
                                        <div class="dz-message  needsclick" style="font-size: 15px !important; margin:0px !important;">
                                            Click to Upload
                                        </div>
                                        <div class="fallback">
                                            <input name="image" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-danger">SKU</label>
                                        <input type="text" class="form-control" placeholder="" name="sku" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Unit</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Select or Type to Add</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="goods" name="returnable_item" placeholder="returnable item" type="checkbox" value="" />
                                        <label class="form-label">Returnable Item</label>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label text-info">Associate Items*</label>

                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label ">Sales Information</label>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Purchase Information</label>

                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Selling Price*</label>
                                        <input class="form-control" name="sales Price" value="copy from total" type="text" />
                                    </div>

                                    <div class="col-md-6">

                                        <label class="form-label">Cost Price*</label>
                                        <input class="form-control" name="sales Price" value="copy from total" />
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">Account*</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Sales</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Account*</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Cost of Goods Sold</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="5" cols="20"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="form-label" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="5" cols="20"></textarea>
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">Tax</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Select a Tax</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Tax</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Select a Tax</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6" style="margin-right:0px;">
                                        <label class="form-label">Peffered Vendor</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="unit">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Dimensions</label>
                                        <div class="input-group">

                                            <input type="text" name="dimensions" class="form-control" aria-label="Text input with segmented dropdown button">
                                            <button type="button" class="btn btn-outline-primary">Cm</button>
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Weight</label>
                                        <div class="input-group">

                                            <input type="text" name="weight" class="form-control" aria-label="Text input with segmented dropdown button">
                                            <button type="button" class="btn btn-outline-primary">Kg</button>
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">Manufacturer</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="manufacturer">
                                            <option value="">Select or Type to Add</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>


                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Brand</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="brand">
                                            <option value="">Select or Type to Add</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">UPC</label>
                                        <input type="text" class="form-control" placeholder="UPC" name="upc" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">MPN</label>
                                        <input type="text" class="form-control" placeholder="MPn" name="mpn_name" />
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">EAN</label>
                                        <input type="text" class="form-control" placeholder="EAN" name="ean" />
                                    </div>



                                    <div class="col-md-6">
                                        <label class="form-label">ISBN</label>
                                        <input type="text" class="form-control" placeholder="ISBN" name="isbn" />
                                    </div>



                                    <br><br><br>

                                    <div class="col-md-12">
                                        <label class="form-label">Additional Information</label>

                                    </div> <br>

                                    <div class="col-md-7">
                                        <label class="form-label">Inventory acount*</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="Inventory_account">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Opening Stock</label>
                                        <input type="text" class="form-control" placeholder="ISBN" name="os" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Opening Stock Rate Per Unit</label>
                                        <input type="text" class="form-control" placeholder="ISBN" name="osrpu" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Reordered Point</label>
                                        <input type="text" class="form-control" placeholder="ISBN" name="rop" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Preffered Vendor*</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="Inventory_account">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
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

</script>
@endsection