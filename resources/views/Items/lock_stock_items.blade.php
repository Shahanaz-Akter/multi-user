@extends('layouts.master')
@section('title')
<title>Lock Stock Items</title>
@endsection
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4>Show All Lock Stock Items</h4>
    <div class="d-flex  justify-content-between mb-5">
    <div class="btn-group">
    <label class="dropdown-toggle" style="font-size: 20px;" data-bs-toggle="dropdown" aria-expanded="false">All Items</label>

    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="">All Items</a></li>
        <li><a class="dropdown-item" href="{{url('/active_items')}}">Active Items</a></li>
        <li><a class="dropdown-item" href="{{url('/ungrouped_items')}}">Ungrouped Items</a></li>
        <li><a class="dropdown-item " href="{{url('/lock_stock_items')}}">Lock Stock Items</a></li>
        <li><a class="dropdown-item " href="{{url('/confirm_items')}}">Confirmed</a></li>
        <li><a class="dropdown-item " href="{{url('/sales_items')}}">Sales</a></li>
        <li><a class="dropdown-item " href="{{url('/purchases_items')}}">Purchases</a></li>
        <li><a class="dropdown-item " href="{{url('/inventory_items')}}">Inventory Items</a></li>
        <li><a class="dropdown-item " href="{{url('/non-inventory_items')}}">Non-Inventory Items</a></li>
        <li><a class="dropdown-item " href="{{url('/services_items')}}">Services</a></li>
        <li><a class="dropdown-item " href="{{url('/inactive_items')}}">Inactive Items</a></li>
        <li><a class="dropdown-item " href="{{url('/returnable_items')}}"> Returnable items
            </a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="{{url('/new_custom_view')}}">+ New Custom View</a></li>
    </ul>
</div>

        <div>
            <a href="{{url('/items')}}"><button class="btn btn-danger">+ NewItem</button></a>
        </div>
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></th>
                <th>Name</th>
                <th>SKU</th>
                <th>Stock On Hand</th>
                <th>Reorder Level<i data-bs-toggle="modal" data-bs-target="#search_filter"class="bx bx-search ms-5"></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>

            <tr>
                <td></td>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
            </tr>

            <tr>
                <td></td>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
            </tr>


            <tr>
                <td></td>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
            </tr>

            <tr>
                <td></td>
                <td> Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
            </tr>

            <tr>
                <td></td>
                <td>Shoili</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
            </tr>

            <tr>
                <td></td>
                <td>Mimi</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
            </tr>

        </tbody>

        <tfoot>
            <tr>
            </tr>
        </tfoot>

    </table>
    <br>

    <!-- Add New Credit Card Modal -->
    <div class="modal fade" id="search_filter" tabindex="-1" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <h5 class="title text-danger">Set Your Mileage Preferences</h5>


                    <form id="" class="row g-3" onsubmit="return false">
                        @csrf

                        <div class="row  col-md-6 mb-2 mt-5">
                            <label class="col-sm-3" for="select2Basic">Search</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="WV">Customers</option>
                                    <option value="WV">Vendors </option>
                                    <option value="WV">Invoices </option>
                                    <option value="WV">Packages </option>
                                    <option value="WV">Shipments </option>
                                    <option value="WV">Sells order </option>
                                    <option value="WV">Credit Notes </option>
                                    <option value="AK">Bill</option>
                                    <option value="WV">Vendor Credits</option>
                                    <option value="WV">Purchase Orders</option>
                                    <option value="WV">Purchase Received</option>
                                    <option value="WV">Payment Made</option>
                                    <option value="WV">Items</option>
                                    <option value="WV">Inventory Adjustments</option>
                                    <option value="WV">Documents</option>
                                    <option value="WV">Sales Receipt</option>
                                    <option value="WV">Task</option>
                                </select>
                            </div>
                        </div>

                        <div class="row  col-md-6 mb-2 mt-5"></div>

                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Item Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">SKU</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Description</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Menufacturer</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="WV">Customers</option>
                                    <option value="WV">Vendors </option>
                                    <option value="WV">Invoices </option>
                                    <option value="WV">Packages </option>
                                    <option value="WV">Shipments </option>
                                    <option value="WV">Sells order </option>
                                    <option value="WV">Credit Notes </option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Brand</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="WV">Customers</option>
                                    <option value="WV">Vendors </option>
                                    <option value="WV">Invoices </option>
                                    <option value="WV">Packages </option>
                                    <option value="WV">Shipments </option>
                                    <option value="WV">Sells order </option>
                                    <option value="WV">Credit Notes </option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">EAN</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">                            <label class="col-sm-3" for="select2Basic">UPC</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">MPN</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">ISBN</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Rate</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="Zip Code" />
                            </div>
                        </div>
                        
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Status</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Active</option>
                                    <option value="WV">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Tax</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Sales Account</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row  col-md-6 mb-2 mt-2">
                            <label class="col-sm-3" for="select2Basic">Purchase Account</label>
                            <div class="col-sm-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 ms-4 mt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Search</button>
                            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection