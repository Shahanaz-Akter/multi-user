@extends('layouts.master')
@section('title')
<title>Lock Stock Composite Items</title>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">

        <h4>Lock Stock Composite Items</h4>

        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3" action="{{url('/post_show_adjustment')}}" method="post">
                                    @csrf
                                    <div class="d-flex  justify-content-between mb-5">
                                        <div class="btn-group col-md-3">
                                        </div>

                                        <div>
                                            <a href=" {{url('/items')}}">
                                                <div class="btn btn-danger">+ New Composite items</div>
                                            </a>
                                        </div>
                                    </div> <br>


                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></th>
                                                <th>Name</th>
                                                <th>SKU</th>
                                                <th>Stoc On Hands</th>
                                                <th>Reorder Point</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                            </tr>


                                            <tr>
                                                <td></td>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>

                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>

                                            </tr>
                                        </tfoot>
                                    </table>

                                    <br><br><br>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>

</div>
<!-- / Content -->
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection