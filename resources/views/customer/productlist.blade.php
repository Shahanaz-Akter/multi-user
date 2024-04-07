@extends('customer.master')
@section('title')
<title>All Products</title>
@endsection

@section('content')
<!--start content-->
<main class="page-content">

    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">

                    <div class="text-center bg-light mb-2 fw-bold p-4">All Product List</div>

                    @if(session('success_msg'))
                    <div class="alert alert-success">
                        {{ session('success_msg') }}
                    </div>
                    @endif

                    @if(session('error_msg'))
                    <div class="alert alert-danger text-center fw-bold">
                        {{ session('error_msg') }}
                    </div>
                    @endif

                    <form method="post" action="{{'/post_order'}}">
                        @csrf

                        <table id="" class="table table-striped table-bordered " style="width: 100%;table-layout:fixed;">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
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

                                    <td class=''>
                                        <span> {{ $product->id }}</span> 
                                        <br>
                                        <input class="w-25 d-none" name='product_ids[]' type="text" value="{{$product->id}}" disabled id="product_{{$product->id}}">
                                    </td>

                                    <td> {{ $product->name }} </td>

                                    <td>
                                        <span id="price_{{$product->id}}"> {{ $product->price }}</span>
                                       
                                        <br>
                                        <input class="w-25 d-none" name='product_prices[]' type="text" value="{{$product->price}}" disabled id="product_price_{{$product->id}}">
                                    </td>

                                    <td> {{ $product->description }} </td>

                                    <!-- input inc dec  -->
                                    <!-- input inc dec  -->
                                    <!-- input inc dec  -->
                                    <td>
                                        <span class="btn btn-sm btn-primary" style="font-size: 15px; padding: 5px 10px" onclick="increment(this, {{$product->id}})"><i class="fas fa-plus"></i>
                                        </span>

                                        <input id="product_qty_{{$product->id}}" name="quantities[]" type="number" class="w-25 text-center" value="1" disabled>

                                        <span class="btn btn-sm btn-danger" style="font-size: 15px;padding: 5px 10px" onclick="decrement(this,{{$product->id}})"><i class="fas fa-minus"></i>
                                        </span>
                                    </td>

                                    <!-- js inc dec  -->
                                    <script>
                                        const increment = (tag, id) => {

                                            let product_price_ = document.querySelector(`#product_price_${id}`);
                                            let product_qty_ = document.querySelector(`#product_qty_${id}`);
                                            let price_ = document.querySelector(`#price_${id}`);

                                            let inpu = tag.parentNode.children[1];
                                            inpu.setAttribute('value', (parseInt(inpu.value) + 1));

                                            let updated_price = inpu.value * product_price_.value;
                                            console.log(updated_price);
                                            // product_price_.setAttribute('value', $updated_price);
                                            price_.innerHTML = updated_price;
                                        }
                                        const decrement = (tag, id) => {
                                            let inpu = tag.parentNode.children[1];
                                            if (inpu.value == '1') {
                                                //do nothing
                                            } else {
                                                inpu.setAttribute('value', (parseInt(inpu.value) - 1));

                                                let product_price_ = document.querySelector(`#product_price_${id}`);
                                                let price_ = document.querySelector(`#price_${id}`);
                                                let pricee = price_.innerHTML;
                                                console.log(pricee);

                                                let updated_price = pricee - parseInt(product_price_.value);
                                                console.log(updated_price);
                                                // product_price_.setAttribute('value', $updated_price);
                                                price_.innerHTML = updated_price;
                                            }
                                        }
                                    </script>


                                    <td>
                                        <span class="btn btn-primary add_cart_btn mb-1" id="add_cart_btn_{{$product->id}}" onclick="enable_input({{$product->id}}, this)">Add
                                        </span>
                                        <span class="d-none btn btn-danger rmv_cart_btn mb-1" id="rmv_cart_btn_{{$product->id}}" onclick="disable_input({{$product->id}}, this)">Remove
                                        </span>
                                    </td>

                                    <!-- enable disable input function -->
                                    <script>
                                        const enable_input = (product_id, tag) => {
                                            let product_id_holder = document.querySelector(`#product_${product_id}`);
                                            let product_qty_holder = document.querySelector(`#product_qty_${product_id}`);
                                            let product_price_holder = document.querySelector(`#product_price_${product_id}`);

                                            let rmv_cart_btn = document.querySelector(`#rmv_cart_btn_${product_id}`);

                                            product_id_holder.removeAttribute('disabled', true);
                                            product_qty_holder.removeAttribute('disabled', true);
                                            product_price_holder.removeAttribute('disabled', true);

                                            // let check_input = document.querySelector(`#check_${product_id}`);
                                            // check_input.checked = true;

                                            tag.classList.add('d-none');
                                            rmv_cart_btn.classList.remove('d-none');

                                        }

                                        const disable_input = (product_id, tag) => {
                                            let product_id_holder = document.querySelector(`#product_${product_id}`); //id
                                            let product_qty_holder = document.querySelector(`#product_qty_${product_id}`); //qty
                                            let product_price_holder = document.querySelector(`#product_price_${product_id}`); //price

                                            let add_cart_btn = document.querySelector(`#add_cart_btn_${product_id}`);

                                            product_id_holder.setAttribute('disabled', true);
                                            product_qty_holder.setAttribute('disabled', true);
                                            product_price_holder.setAttribute('disabled', true);

                                            // let check_input = document.querySelector(`#check_${product_id}`); //input vheck
                                            // check_input.checked = false;

                                            // add tag
                                            tag.classList.add('d-none');
                                            add_cart_btn.classList.remove('d-none');
                                        }
                                    </script>


                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <div class="text-center mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Order Products</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection