@extends('layouts.master')
@section('title')
<title>New Items</title>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">

        <h4>New Item</h4>
        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3" action="{{url('/post_items')}}">
                                    <div class="col-md-12">
                                        <label class="">Type</label><br>
                                        <input id="goods" name="type" type="radio" value="" />
                                        <label for="goods">Goods</label>
                                        <input name="type1" type="radio" value="" />
                                        <label for="services">Service</label>
                                    </div>
                                    <br>

                                    <div class="col-md-6">
                                        <label class="form-label">Item Name</label>
                                        <input type="text" class="form-control" placeholder="Item Name" name="item_name" />
                                    </div>

                                    <div class=" col-md-6 dropzone needsclick" id="dropzone-basic" style="width: 200px; height: 100px; padding: 2px !important;">
                                        <div class="dz-message needsclick" style="font-size: 20px !important; margin:0px !important;">
                                            Drop files here or click to upload
                                        </div>
                                        <div class="fallback">
                                            <input name="image" type="file" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">SKU*</label>
                                        <input type="text" class="form-control" placeholder="SKU" name="sku" />
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
                                        <label class="">Returnable Item</label>
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
                                        <label class="form-label">MPN</label>
                                        <input type="text" class="form-control" placeholder="MPn" name="mpn_name" />
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">ISBN</label>
                                        <input type="text" class="form-control" placeholder="ISBN" name="isbn" />
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">UPC</label>
                                        <input type="text" class="form-control" placeholder="UPC" name="upc" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">EAN</label>
                                        <input type="text" class="form-control" placeholder="EAN" name="ean" />
                                    </div>

                                    <div class="col-md-6">
                                        <input name="type1" type="checkbox" placeholder="Sales Information" name="sales_info" />
                                        <label class="">Sales Information</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="type1" type="checkbox" placeholder="Purchase Information" nmae="purchase_info" />
                                        <label class="">Purchase Information</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="">Selling Price*</label>

                                        <div class="input-group">
                                            <span class="input-group-text">BDT</span>
                                            <input type="text" class="form-control" placeholder="BDT" aria-label="Username" aria-describedby="basic-addon11" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="">Cost Price*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">BDT</span>
                                            <input type="text" class="form-control" placeholder="Cost Price" aria-label="Username" aria-describedby="basic-addon11" name='cost_price' />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Accounts</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="accounts">
                                            <option value="">Sales</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Accounts</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="accounts">
                                            <option value="">Cost of Good sold</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="5" cols="20"></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tax</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="tax">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Tax</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="tax">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <input id="goods" name="track" type="checkbox" value="" />
                                        <label class="">Track Inventory for this Item</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Inventory Account</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="inventory_account">
                                            <option value="">Select Account</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Opening Stock</label>
                                        <input type="text" class="form-control" placeholder="Opening_stock" name="opening_stock" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Opening Stock Rate Per Unit</label>
                                        <input type="text" class="form-control" placeholder="Opening_stock_per_unit" name="opening_stock_per_unit" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Reorder Point</label>
                                        <input type="text" class="form-control" placeholder="Reorder_point" name="reorder_point" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Preffered Vendor</label>
                                        <select class="select2 form-select" data-allow-clear="true" placeholder="Preffered Vendor" name="Preffered_vendor">
                                            <option value="">Select Account</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <br><br><br><br><br>



                                    <div class="mt-2">
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

</div>
<!-- / Content -->
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

@endsection