@extends('index')

@section('content')

@include('products.partials.filter')



<div class="row">
    <div class="col-lg-12 col-xs-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Firm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price_id }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->firm_id }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection