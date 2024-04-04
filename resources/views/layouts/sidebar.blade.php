<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-divider mt-0">
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->

        <li class="menu-item">
            <a href="{{url('/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>



        <li class="menu-header small text-uppercase"><span class="menu-header-text">Product</span></li>

        <li id="p1" class="menu-item">
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
                <li id="add_product" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/add_product')}}" class="menu-link" on="items()">
                        <div>Add Product</div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/add_product')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>
                <li id="product_list" class="menu-item menu_icon new_customer" style="position: relative;">
                    <a href="{{url('/product_list')}}" class="menu-link">
                        <div data-i18n="product_list">Product List
                            <i id="icon" style="font-size: 15px; visibility: hidden;" class="fas fa-circle-plus fa-xl fa-fw"></i>
                        </div>
                    </a>
                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/product_list')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>
                </li>               
            </ul>
        </li>




        <li class="menu-header small text-uppercase"><span class="menu-header-text">Order</span></li>

        <li id="p2" class="menu-item">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="order">Order</div>
            </a>

            <ul class="menu-sub">
                <li id="customer" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/add_order')}}" class="menu-link">
                        <span data-i18n="Customers">Add Order</span>
                    </a>

                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/add_order')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>

                </li>

                <li id="sales_order" class="menu-item new_customer" style="position: relative;">
                    <a href="{{url('/order_list')}}" class="menu-link">
                        <span data-i18n="Sales Order">Order List</span>
                    </a>

                    <a style="position: absolute; top: 10px; bottom: 20px; left: 200px;" href="{{url('/order_list')}}">
                        <i class="fa-solid fa-circle-plus hide"></i>
                    </a>

                </li>

              
              


        <li class="menu-item">
            <a href="{{url('/reports')}}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Reports">Reports</div>
            </a>
        </li>



        <li class="menu-item">
            <a href="{{url('/documents')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Documents">Documents</div>
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