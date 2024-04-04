@extends('layouts.master')
@section('title')
<title>New Items</title>
@endsection
@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4>Show All Items</h4>
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
                <a href="{{url('/items')}}"><button class="btn btn-danger">+ New Item</button></a>
            </div>
        </div>
        <!-- Examples -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-title" style="padding-top: 20px;">
                        Item Groups
                    </div>
                    <div class="text-center">
                        <img class="card-img-top" src="../../assets/img/elements/shirt.jpg" alt="Card image cap" style="width: 20%; height: auto;" />
                    </div>
                    <div class="card-body pb-0">

                        <p class="card-text text-center">Create multiple variant of same item using the item groups </p>
                        <a href="{{url('/new_item_groups')}}" class="btn btn-primary">New Item Groups</a>
                    </div>

                    <div class="card-footer ">
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-title" style="padding-top: 20px;">
                        Items
                    </div>
                    <div class="text-center">
                        <img class="card-img-top" src="../../assets/img/elements/shirt.jpg" alt="Card image cap" style="width: 20%; height: auto;" />
                    </div>
                    <div class="card-body pb-0">

                        <p class="card-text text-center">Create standalone items and services that you buy and sell </p>
                        <a href="{{url('/items')}}" class="btn btn-primary">New Item</a>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-5">
                <div class="card text-center">
                    <div class="card-title" style="padding-top: 20px;">
                        Composite Items
                    </div>
                    <div class="text-center">
                        <img class="card-img-top" src="../../assets/img/elements/shirt.jpg" alt="Card image cap" style="width: 20%; height: auto;" />
                    </div>
                    <div class="card-body pb-0">

                        <p class="card-text text-center">Bundle different items together and sell them as kits </p>
                        <a href="{{url('/new_composite_items')}}" class="btn btn-primary">New Composite Items</a>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-5">
                <div class="card text-center">
                    <div class="card-title" style="padding-top: 20px;">
                        Price List
                    </div>
                    <div class="text-center">
                        <img class="card-img-top" src="../../assets/img/elements/shirt.jpg" alt="Card image cap" style="width: 20%; height: auto;" />
                    </div>
                    <div class="card-body pb-0">

                        <p class="card-text text-center">Tweak your item prices for specific contacts or transactions </p>
                        <a href="{{url('/new_price_list')}}" class="btn btn-primary">New Price List</a>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>

        </div>
        <!-- Examples -->
    </div>
</div>

@endsection