<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title> Inventory_</title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />
    <!-- Modal Examples CSS Link-->
    <link rel="stylesheet" href="{{asset('vendor/libs/animate-css/animate.css')}}"> 
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/flag-icons.css')}}" />
    <!-- date Picker -->
   
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
  
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}} " />  
    <link rel="stylesheet" href="{{asset('../../assets/vendor/libs/dropzone/dropzone.css')}}" />
    <!-- Page CSS -->
    <!-- Tagigy css -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/tagify/tagify.css')}}" />


    <!-- Data table CSS start-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css"/>


    <!-- Data tables -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">


    <!-- date range picker -->
    <link  href="{{asset('/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
    <!-- Data table CSS end-->

    <!-- sxport button -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css
"/>



    <style>
      .customer{
         font-variant:normal;
         border: 2px solid white;
         height: 50vh; width: 50vw; 
         margin: 0px auto; 
         margin-top: 100px;
         text-align:center;
      }
      .customer>h4{
        font-weight: 400;
        font-size: 1.7rem;
        margin-bottom: 10px;
        margin-top: 20px;
        color: black !important;
      }
      .customer>p{     
        color: black !important;
      }
      #new{
          margin-top: 20px;
          color: black !important;
          padding: 10px 24px;
          text-transform: up1ercase;
          border-radius: 20px;
          background-color: rgb(64 141 251);
          cursor: pointer;
          border-color: rgb(64 141 251);
          transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
      .customer>a{
          text-decoration: none;
          color: rgb(64 141 251) !important;
          display: block;
          margin-top: 50px;
          cursor: pointer;
          font-weight: 400;
          line-height: 1.1;
      }
.hide {
  visibility: hidden!important;

}
.new_customer:hover .hide {
  /* color: red!important; */
  visibility: visible!important;
}
     .other::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .3s;
        }
        .address:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      /* transition: height width background-color 4s ease-in; */
        }
        .contact:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
        }
        .custom:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
        }
        .report:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .8s;
        }
       
        .remarks:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
        }
        .record_expenses::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
        }
        .record_mileage:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
                          }
        .bulk:hover::after{
                      content: "";
                      cursor: pointer;
                      height: 2px;
                      width: 100%;
                      display:block;
                      background-color:#3B71CA;
                      transition: all .6s;
                   }
     
    </style>
    <!-- Helpers -->
    <script src="{{asset('/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!-- Setting Icon -->
    <!-- <script src="{{asset('/assets/vendor/js/template-customizer.js')}}"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/assets/js/config.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'GA_MEASUREMENT_ID');
    </script>


    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->
</head>

<body>
  <!-- Layout wrap1er -->
  <div class="layout-wrap1er layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      @include('layouts.sidebar')
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('layouts.header')
        <!-- / Navbar -->
        <!-- Content wrap1er -->
        <div class="content-wrap1er">
          <!-- Content -->
          @yield('content')
          <!-- / Content -->
          <!-- / footer -->
          <!-- There will be placed footer tag -->
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrap1er -->

      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>

  <!-- / Layout wrap1er -->
  <!-- buy now content with link -->
  <!--<div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/pop1er/pop1er.js')}}"></script>
  <script src="{{asset('/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/i18n/i18n.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
  <script src="{{asset('/assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="{{asset('/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
  <!-- Main JS -->
  <script src="{{asset('/assets/js/main.js')}}"></script>
  <!-- Page JS -->
  <script src="{{asset('/assets/js/form-layouts.js')}}"></script>
  <script src="{{asset('/assets/js/dashboards-analytics.js')}}"></script>
  <!-- Vendors JS -->
  <script src="{{asset('/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/moment/moment.js')}}"></script>
  <!-- Dropzone js -->
  <script src="{{asset('../../assets/vendor/libs/dropzone/dropzone.js')}}"></script>
  <!-- Page JS -->
  <script src="../../assets/js/forms-file-upload.js"></script>


  <!-- for data tables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
  <!-- for data tables end -->

  <!-- extra part er JS -->
  <script src="{{asset('/assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
  <script src="{{asset('/assets/js/forms-extras.js')}}"></script>
  <!-- Tagify -->
  <script src="{{asset('/assets/vendor/libs/tagify/tagify.js')}}"></script>
  <script src="{{asset('/assets/js/forms-tagify.js')}}"></script>
  <!-- Vendors JS -->
  <script src="{{asset('/assets/vendor/js/dropdown-hover.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('/assets/vendor/libs/flatpickr/flatpickr.js')}}" />


  <script>
    $(".select2").select2();
    $(document).ready(function() {
      $('#example').DataTable({
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0
        }],
        select: {
          style: 'os',
          selector: 'td:first-child'
        },
        order: [
          [1, 'asc']
        ]
      });
    });
  </script>

  <script>
    var flatpickrDate1 = document.querySelector("#flatpickr-date1");
    flatpickrDate1.flatpickr({
      monthSelectorType: "static"
    });

    var flatpickrDate2 = document.querySelector("#flatpickr-date2");
    flatpickrDate2.flatpickr({
      monthSelectorType: "static"
    });

    var flatpickrRange = document.querySelector("#flatpickr-range");
    flatpickrRange.flatpickr({
      mode: "range"
    });
  </script>


  <script src="{{asset('../../assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
  <script src="{{asset('../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
  <script src="{{asset('../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>

  <script src="{{asset('../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>


  <script src="{{asset('../../assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
  <script src="{{asset('../../assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('../../assets/js/main.js')}}"></script>

  <!-- Page JS -->
  <script src="{{asset('../../assets/js/tables-datatables-basic.js')}}"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ]
      });
    });
  </script>

  <script>
    let url = window.location.href;
    let p1 = document.querySelector('#p1');
    let p2 = document.querySelector('#p2');
    let p3 = document.querySelector('#p3');

    // Items Parent
    if (url.includes('/show_items')) {
      let item = document.querySelector('#item');
      p1.classList.add('active');
      p1.classList.add('open');
      item.classList.add('active');

    } else if (url.includes('/show_composite_items')) {
      let composite = document.querySelector('#composite');
      p1.classList.add('active');
      p1.classList.add('open');
      composite.classList.add('active');

    } else if (url.includes('/item_groups')) {
      let group = document.querySelector('#group');
      console.log(group);
      p1.classList.add('active');
      p1.classList.add('open');
      group.classList.add('active');

    } else if (url.includes('/price_lists')) {
      let price = document.querySelector('#price');
      p1.classList.add('active');
      p1.classList.add('open');
      price.classList.add('active');

    } else if (url.includes('/show_inventory_adjustments')) {
      let inventory_adjustment = document.querySelector('#adjust');
      p1.classList.add('active');
      p1.classList.add('open');
      inventory_adjustment.classList.add('active');

    }
    // Sales Parent
    else if (url.includes('/customers')) {
      let customer = document.querySelector('#customer');
      p2.classList.add('active');
      p2.classList.add('open');
      customer.classList.add('active');
    } else if (url.includes('/sales_order')) {
      let sales_order = document.querySelector('#sales_order');
      p2.classList.add('active');
      p2.classList.add('open');
      sales_order.classList.add('active');
    } else if (url.includes('/sales_order')) {
      let sales_order = document.querySelector('#sales_order');
      p2.classList.add('active');
      p2.classList.add('open');
      sales_order.classList.add('active');
    } else if (url.includes('/packages')) {
      let package = document.querySelector('#package');
      p2.classList.add('active');
      p2.classList.add('open');
      package.classList.add('active');
    } else if (url.includes('/shipments')) {
      let shipment = document.querySelector('#shipment');
      p2.classList.add('active');
      p2.classList.add('open');
      shipment.classList.add('active');
    } else if (url.includes('/invoices')) {
      let invoice = document.querySelector('#invoice');
      p2.classList.add('active');
      p2.classList.add('open');
      invoice.classList.add('active');
    } else if (url.includes('/sales_receipts')) {
      let sales_receipt = document.querySelector('#sales_receipt');
      p2.classList.add('active');
      p2.classList.add('open');
      sales_receipt.classList.add('active');
    } else if (url.includes('/sales_receipts')) {
      let sales_receipt = document.querySelector('#sales_receipt');
      p2.classList.add('active');
      p2.classList.add('open');
      sales_receipt.classList.add('active');
    } else if (url.includes('/payments_received')) {
      let payment_received = document.querySelector('#payment_received');
      p2.classList.add('active');
      p2.classList.add('open');
      payment_received.classList.add('active');
    } else if (url.includes('/sales_returns')) {
      let sales_return = document.querySelector('#sales_return');
      p2.classList.add('active');
      p2.classList.add('open');
      sales_return.classList.add('active');
    } else if (url.includes('/credit_notes')) {
      let credit_note = document.querySelector('#credit_note');
      p2.classList.add('active');
      p2.classList.add('open');
      credit_note.classList.add('active');
    }


    // Purchases Parent
    else if (url.includes('/vendors')) {
      let vendor = document.querySelector('#vendor');
      p3.classList.add('active');
      p3.classList.add('open');
      vendor.classList.add('active');
    } else if (url.includes('/expenses')) {
      let expense = document.querySelector('#expense');
      p3.classList.add('active');
      p3.classList.add('open');
      expense.classList.add('active');
    } else if (url.includes('/purchase_orders')) {
      let expense = document.querySelector('#purchase_order');
      p3.classList.add('active');
      p3.classList.add('open');
      purchase_order.classList.add('active');
    } else if (url.includes('/purchase_receives')) {
      let expense = document.querySelector('#purchase_receive');
      p3.classList.add('active');
      p3.classList.add('open');
      purchase_receive.classList.add('active');
    } else if (url.includes('/bills')) {
      let bill = document.querySelector('#bill');
      p3.classList.add('active');
      p3.classList.add('open');
      bill.classList.add('active');
    } else if (url.includes('/payments_made')) {
      let payments_made = document.querySelector('#payment_made');
      p3.classList.add('active');
      p3.classList.add('open');
      payments_made.classList.add('active');
    } else if (url.includes('/vendor_credits')) {
      let payments_made = document.querySelector('#vendor_credit');
      p3.classList.add('active');
      p3.classList.add('open');
      vendor_credit.classList.add('active');
    }
  </script>
</body>

</html>