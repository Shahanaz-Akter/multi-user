@extends('layouts.master')
@section('title')
<title>Add Product</title>
@endsection
@section('content')
<!--sidebar-->
@include('layouts.sidebar')
<!--sidebar-->


<!--start content-->
<main class="page-content">


    <div class="row">
       

                <div class="card-body">
           
                        <div class="">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">


                                    @if(session('success_msg'))
                                        <div class="alert alert-success">
                                            {{ session('success_msg') }}
                                        </div>
                                    @endif
                                
                                   

                                    <form class="row g-3" id="form" action="{{ '/post_product'}}" method="post" >
                                        @csrf

                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="col-12 col-lg-6">
                                            <label class="form-label"><b>Product Name</b></label>
                                            <input name="name" type="text" class="form-control" placeholder="Product Name" required>
                                        </div>

                                      

                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label"><b> Price (TK)</b></label>
                                            <input name="price" class="form-control" placeholder="00.00"  required></input>
                                        </div>

                                        @error('quantity')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label"><b> Quantity</b></label>
                                            <input name="quantity" type="text" class="form-control" placeholder="quantity" required>
                                        </div>

                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-12 col-lg-6">
                                            <label class="form-label"><b> Description</b></label>
                                            <textarea name="description" type="text" class="form-control" rows="10" required></textarea>
                                        </div>
                                       
                                       

                                        <div class="col-12 ">
                                            <div class="">
                                                <button style="display: block;margin-right:auto;margin-right:auto;" class="btn btn-success" type="submit">Save Product</button>
                                            </div>

                                        </div>



                                    </form>
                                </div>
                            </div>
                   

                 

                </div>
                <!--end row-->
          
    </div>
    </div>
    <!--end row-->

</main>

@endsection