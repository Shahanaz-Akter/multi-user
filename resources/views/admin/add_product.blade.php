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
                <div class="card shadow-none  border">
                    <div class="card-body">
                    <div class="text-center bg-light mb-2 fw-bold p-4 text-primary">Upload Product <i class="fas fa-plus"></i></div>


                        @if(session('success_msg'))
                        <div class="alert alert-success fw-bold">
                            {{ session('success_msg') }}
                        </div>
                        @endif



                        <div class="d-flex justify-content-center align-items-center">

                            <form class="row g-3" id="form" action="{{ '/post_product'}}" method="post">
                                @csrf

                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                                    <label class="form-label"><b>Product Name</b></label>
                                    <input name="name" type="text" class="form-control" placeholder="Shirt" required>
                                </div>


                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                                    <label class="form-label"><b> Product Price (TK)</b></label>
                                    <input name="price" class="form-control" placeholder="00.00" required></input>
                                </div>

                                @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                                    <label class="form-label"><b> Total Quantity</b></label>
                                    <input name="quantity" type="text" class="form-control" placeholder="100">
                                </div>


                                <div class="col-12 col-lg-12 col-md-12 col-xl-12">
                                    <label class="form-label"><b> Product Description</b></label>
                                    <textarea name="description" type="text" class="form-control" rows="10"></textarea>
                                </div>


                                <div class="col-12 w-100">
                                    <div class="">
                                        <button style="display: block;margin-right:auto;margin-right:auto;" class="btn btn-primary" type="submit">Save Product</button>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>




            </div>
            <!--end row-->

        </div>
    </div>
    <!--end row-->

</main>

@endsection