@extends('index')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">Dashboard</div>
    <div class="dashboard-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12 dashboard-sub-header">
                Stocks
            </div>
            @foreach($stocks as $stock)
                <div class="col-lg-3 col-xs-3">
                    <div class="showcase">
                        <div class="showcase-header">
                            {{ $stock->categories['name'] }}
                        </div>
                        <div class="showcase-body">
                            {{ $stock['sum'] }} {{ $stock['unit'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection