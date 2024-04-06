@extends('layouts.master')
@section('title')
<title>All Products</title>
@endsection
<!--sidebar-->
@include('layouts.sidebar')
<!--sidebar-->
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

                                <th>Product ID</th>
                                <th>Name</th>                            
                                <th>Price</th>
                                <th>Description</th>  
                                <th>Quantity</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $products = \App\Models\Product::all();
                          
                            @endphp
                            @foreach ($products as $product)
                            <tr class="col-12">


                                <td> {{ $product->id }} </td>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->price }} </td>
                                <td> {{ $product->description }} </td>
                                <td> {{ $product->quantity }} </td>
                               
                               
                               

                              
                                <td >
                                    
                                    <a class="btn btn-primary" href="{{ '/edit_product/'. $product->id }}">Edit</a>
                                    
                                  
                                    <a class="btn btn-dark" href="{{ '/delete_product/'. $product->id }}">Delete</a>

                                    
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