<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-divider mt-0">
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>
        <li class="menu-item">
            <a href="{{url('/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Product</span></li>
        <li class="menu-item">
            <a href="{{url('/add_product')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Add Product</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{url('/productlist')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Product List</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase"><span class="menu-header-text">Order</span></li>

        <li class="menu-item">
            <a href="{{url('/orderlist')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Customer Orders</div>
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