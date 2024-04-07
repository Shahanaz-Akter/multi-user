@extends('layouts.master')
@section('title')
<title>Dashboard</title>
@endsection
@section('content')

<div class="text-center bg-light mb-2 fw-bold p-4 text-primary"">Admin Dahsboard</div>
<div class="row">
    @php
    $customers= App\Models\User::where('role', 'customer')->get();
    @endphp

    @foreach( $customers as $customer)

    @php
    $customerMonthlyReport= App\Models\customerReport::where('user_id',$customer->id)->get();
    $totalPrices = [];
    $totalmonths = [];
    $totalquantities = [];
    $totalproductids = [];
    @endphp

    <div class="col-12 col-md-6 col-lg-6 col-xl-6 border p-4 mb-2">
        <canvas id="myChart_{{$customer->id}}" style="width:100%;max-width:600px"></canvas>
        <div class="text-primary mt-2 mb-2"><b>Name: {{$customer->name}}</b> </div>
        <div class="row">
        @foreach($customerMonthlyReport as $report)
    @php
    $totalPrices[] = $report->monthly_total_buyed_price;
    $totalmonths[] = $report->month;
    @endphp
    <div class="col-12 col-md-2 col-lg-2 col-xl-2 border"><span class="text-primary">{{$report->month}}</span><br>
    @php
    $product= App\Models\Product::where('id',$report->most_buyed_product_id)->first();
    @endphp
    <b>Pro: </b> {{$product->name}} <br>
    <b>Qty: </b>  {{$report->most_buyed_product_quantity}} <br>
</div>

    @endforeach

        </div>

        <script>
            console.log("myChart_{{$customer->id}}");

            let xValues_{!!$customer->id!!} ={!! json_encode($totalmonths) !!};

            let yValues_{!!$customer->id!!} = {!! json_encode($totalPrices) !!};

            new Chart("myChart_{{$customer->id}}", {

                type: "line",
                data: {
                    labels: xValues_{!!$customer->id!!},
                    datasets:[{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues_{!!$customer->id!!}
                    }],

                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 1,
                                max: 20000
                            }
                        }],
                    }
                }
            });
        </script>
    </div>
    @endforeach
    
</div>

@endsection