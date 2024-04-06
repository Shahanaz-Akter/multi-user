<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-divider mt-0">
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
       
       

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Routes</span></li>
        <li class="menu-item">
            <a href="{{url('/customer_productlist')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Product List</div>
            </a>
        </li>


        <li class="menu-item">
            <a href="{{url('/customer_order_history')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Order List</div>
            </a>
        </li>

       
        <li id="p1" class="menu-item d-none">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Product</div>
            </a>

            <ul class="menu-sub">
                <!-- <li class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/example')}}" class="menu-link">
                        <div data-i18n="Examples">Examples</div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/items')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li> -->
                <li id="item" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/add_product')}}" class="menu-link" on="items()">
                        <div>Add Product</div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/add_product')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>
                
                <li id="group" class="menu-item menu_icon new_customer" style="position: relative;">
                    <a href="{{url('/product_list')}}" class="menu-link">
                        <div>Product List
                            <i id="icon" style="font-size: 15px; visibility: hidden;" class="fas fa-circle-plus fa-xl fa-fw"></i>
                        </div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/product_list')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>

             

               
            </ul>
        </li>
        <li class="d-none menu-header small text-uppercase"><span class="menu-header-text">Sales</span></li>
        <li id="p2" class="menu-item d-none">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Sales">Sales</div>
            </a>

            <ul class="menu-sub">
                <li id="customer" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/customers')}}" class="menu-link">
                        <span data-i18n="Customers">Customers</span>
                    </a>

                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/new_customer')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>

                </li>

                <li id="sales_order" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/sales_order')}}" class="menu-link">
                        <span data-i18n="Sales Order">Sales Order</span>
                    </a>

                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/new_sales_order')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>

                </li>

                <li id="package" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/packages')}}" class="menu-link">
                        <div data-i18n="Packages">Packages</div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/new_package')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>

                <li id="shipment" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/shipments')}}" class="menu-link">
                        <div data-i18n="Shipments">Shipments</div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/new_shipment')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>

                

               
    </ul>
</aside>
<!-- / Menu -->

<script>
    const items = () => {
        let pp = document.querySelector('#pp');
        pp.classList.add('open');
        pp.classList.add('active');
        let item = document.querySelector('#item');
        item.classList.add('active');


    }
</script>