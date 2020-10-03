@extends('index')

@section('content')

@include('products.partials.filter')



<div class="row">
    <div class="col-lg-12 col-xs-12 ">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col"> {{ ucwords($column) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            @foreach($columns as $column)
                                <td>{{ $product->$column }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection