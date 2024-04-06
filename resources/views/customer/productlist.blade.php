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


                    @if(session('success_msg'))
                        <div class="alert alert-success">
                            {{ session('success_msg') }}
                        </div>
                    @endif

                    <form method="post" action="{{'/post_order'}}">
                        @csrf
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Order Products</button>
                        </div>
                    <table id="" class="table table-striped table-bordered " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>

                                <th class='d-none'>Product ID</th>
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


                                <td class=''> {{ $product->id }} 
                                    <br>
                                <input class="w-25" name='product_ids[]'  type="text" value="{{$product->id}}" disabled id="product_{{$product->id}}">
                                </td>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->price }} 
                                    <br>
                                    <input class="w-25" name='product_prices[]'  type="text" value="{{$product->price}}" disabled id="product_price_{{$product->id}}">
                                
                                
                                </td>
                                <td> {{ $product->description }} </td>
                                <script>
                                    const decrement=(tag)=>{
                                        let inpu = tag.parentNode.children[1];
                                        if(inpu.value=='0'){
                                            //do nothing
                                        }else{
                                            inpu.setAttribute('value', (parseInt(inpu.value)-1));
                                        }
                                    }
                                    const increment=(tag)=>{
                                        let inpu = tag.parentNode.children[1];
                                        inpu.setAttribute('value', (parseInt(inpu.value)+1));
                                    }
                                   </script>
                                <td> 
                                <span class=" btn-success p-3"  style="font-size: 15px;" onclick="decrement(this)">dec</span>    
                                <input  id="product_qty_{{$product->id}}" name="quantities[]" type="number" style="width:50px" value="1" disabled>
                                <span class=" btn-success p-3" style="font-size: 15px" onclick="increment(this)">inc</span>    
                                </td>
                               
                               
                               
<script>
    const enable_input =(product_id, tag)=>{
        let product_id_holder = document.querySelector(`#product_${product_id}`);
        let product_qty_holder = document.querySelector(`#product_qty_${product_id}`);
        let product_price_holder = document.querySelector(`#product_price_${product_id}`);
        let rmv_cart_btn = document.querySelector(`.rmv_cart_btn`);

        product_id_holder.removeAttribute('disabled');
        product_qty_holder.removeAttribute('disabled');
        product_price_holder.removeAttribute('disabled');
        tag.classList.add('d-none');
        rmv_cart_btn.classList.remove('d-none');

    }
    const disable_input =(product_id, tag)=>{
        let product_id_holder = document.querySelector(`#product_${product_id}`);
        let product_qty_holder = document.querySelector(`#product_qty_${product_id}`);
        let product_price_holder = document.querySelector(`#product_price_${product_id}`);

        let add_cart_btn = document.querySelector(`.add_cart_btn`);

        product_id_holder.setAttribute('disabled',true);
        product_qty_holder.setAttribute('disabled',true);
        product_price_holder.setAttribute('disabled',true);
        tag.classList.add('d-none');
        add_cart_btn.classList.remove('d-none');
    }
</script>
                              
                                <td >
                                    
                                    <span class="btn btn-warning add_cart_btn" onclick="enable_input({{$product->id}}, this)">ADD</span>
                                    <span class="btn btn-danger rmv_cart_btn" onclick="disable_input({{$product->id}}, this)">REMOVE</span>
                                   
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection