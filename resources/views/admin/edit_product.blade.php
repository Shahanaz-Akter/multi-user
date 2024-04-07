@extends('layouts.master')
@section('title')
<title>Edit Product</title>
@endsection
@section('content')
<!--sidebar-->
@include('layouts.sidebar')
<!--sidebar-->


<!--start content-->
<main class="page-content">


    <div class="row">


        <div class="card-body">
            <div class="text-center bg-light mb-2 fw-bold p-4">Edit Product</div>

            <div class="">
                <div class="card shadow-none border">
                    <div class="card-body">


                        <form class="row g-3" id="form" action="{{ '/post_edit_product/'.$product->id}}" method="post">
                            @csrf


                            <div class="col-12 col-lg-6">
                                <label class="form-label"><b>Product Name</b></label>
                                <input name="name" type="text" class="form-control" value="{{$product->name}}">
                            </div>


                            <div class="col-12 col-lg-6">
                                <label class="form-label"><b> Product Price</b></label>
                                <input name="price" class="form-control" value="{{$product->price}}"></input>
                            </div>



                            <div class="col-12 col-lg-6">
                                <label class="form-label"><b> Total Quantity</b></label>
                                <input name="quantity" type="text" class="form-control" value="{{$product->quantity}}">
                            </div>


                            <div class="col-12 col-lg-6">
                                <label class="form-label"><b>Product Description</b></label>
                                <textarea name="description" type="text" class="form-control" rows="10">{{$product->description}}
                                </textarea>
                            </div>



                            <div class="col-12 ">
                                <span class="">
                                    <button style="" class="btn btn-primary" type="submit">Update Product</button>
                                </span>

                                <span class="">
                                  <a href="/productlist"> <div class="btn btn-danger" type="submit">Back</div></a> 
                                </span>

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