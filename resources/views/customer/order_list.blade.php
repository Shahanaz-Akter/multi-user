@extends('customer.master')
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

                                <th class=''>Product ID</th>
                                <th>Customer Name</th>
                                <th>Price</th>
                                <th>Products</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr class="col-12">
                                @php
                                $user = App\Models\User::where('id', $order->user_id)->first();
                                @endphp
                                <td>

                                    {{ $user->id }}
                                </td>

                                <td>

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
                                    {{$product->name}} - <b>QTY: </b>{{$productQTYArr[$index]}}
                                    <br>
                                    @endforeach
                                </td>

                                <td>
                                    <span class="btn btn-success add_cart_btn">{{$order->status}}</span>
                                </td>
                                <td>
                                   <a href="/edit_order/{{$order->id}}"><span class="btn btn-primary add_cart_btn"><i class="fas fa-pencil-alt"></i></span></a> 
                                   <a href="/delete_order/{{$order->id}}"><span class="btn btn-danger add_cart_btn"><i class="fas fa-trash"></i></span></a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="text-center mb-3 mt-3">
                        <button type="submit" class="btn btn-primary">Order Products</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection