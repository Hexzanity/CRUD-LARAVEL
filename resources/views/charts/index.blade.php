@extends('dashboard')
<head>
    <title>Nike Admin</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
</head>
@section('content')
<div class="container">
    <div class="col-xl-6 col-sm-4 mb-xl-0 mb-0 maxwell">
        <div class="col text-right">
           <h2>Total Earnings <br> ₱ {{ $totalEarnings }}.00</h2>
        </div>
    </div>
    <div class="col-xl-6 col-sm-4 mb-xl-0 mb-4 maxwells">
        <div class="col text-right">
            <h2>Clients <br> {{ $totalClients }}</h2>
        </div>
    </div>

    <br>    <br>    <br>     <br>    <br>
    <div class="row mb-3">
        <div class="col text-center">
            <h2>Categories and Total Ordered</h2>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Category</th>
                            <th class="text-center">Total Ordered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categoryData as $category)
                        <tr>
                            <td class="text-center">{{ $category->name }}</td>
                            <td class="text-center">{{ $category->total_ordered }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="contain-x">
        <h2 class="text-center">Total Earnings Per Product</h2>

        <div class="d-flex justify-content-center">
            <div class="chart-container">
                <canvas id="earningsChart" style="width: 1000px; height: 400px;"></canvas>
            </div>
        </div>

        <h2 class="text-center">Total Sales Per Day</h2>

        <div class="d-flex justify-content-center">
            <div class="chart-container">
                <canvas id="salesChart" style="width: 1000px; height: 400px;"></canvas>
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="{{ asset('js/chart.js') }}">

    @extends('chartscript')
</div>
    @extends('style')

@endsection
