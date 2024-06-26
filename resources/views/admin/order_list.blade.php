@extends('layouts.master')
@section('title')
<title>Order history</title>
@endsection

@section('content')
<!--start content-->
<main class="page-content">



    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">


                    @if(session('success_msg'))
                    <div class="alert alert-success">
                        {{ session('success_msg') }}
                    </div>
                    @endif


                    <table id="" class="table table-striped table-bordered " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>

                                <th class='d-none'>Product ID</th>
                                <th>Customer Name</th>
                                <th>Price</th>
                                <th>Products</th>
                                <th>Default Status</th>
                                <th>Change Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr class="col-12">

                                <td>
                                    @php
                                    $user = App\Models\User::where('id', $order->user_id)->first();
                                    @endphp

                                    {{ $user->name }}
                                </td>

                                <td> {{ $order->total_price }} </td>
                                <td>
                                    @php
                                    $productIDArr = json_decode($order->products_ordered, true); // Convert JSON to array
                                    $productQTYArr = json_decode($order->quantities, true); // Convert JSON to array
                                    @endphp

                                    @foreach($productIDArr as $index => $productID)
                                    @php
                                    $product = App\Models\Product::where('id', $productID)->first();
                                    @endphp
                                    <b>Name: </b>
                                    {{$product->name}}, <b>QTY: </b>{{$productQTYArr[$index]}}
                                    <br>
                                    @endforeach
                                </td>



                                <td>
                                    {{$order->status}}
                                </td>


                                <td>
                                    <a class="btn btn-sm btn-warning mb-2" href="{{'/changeStatus/pending/'.$order->id}}">Pending</a>

                                    <a class="btn btn-sm btn-success  mb-2" href="{{'/changeStatus/processing/'.$order->id}}">Processing</a>

                                    <a class="btn btn-sm btn-primary  mb-2" href="{{'/changeStatus/completed/'.$order->id}}">Completed</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ '/delete_order/'. $order->id }}"><i class="fas fa-trash"></i></a>
                                </td>

                            </tr>


                            @endforeach
                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</main>

@endsection