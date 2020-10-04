@extends('index')

@section('content')

@include('products.partials.filter')

@include('products.partials.insert')


<div class="row">
    <div class="col-lg-12 col-xs-12 ">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col"> {{ ucwords($column) }}</th>
                        @endforeach
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            @foreach($columns as $column)
                                <td>{{ $product->$column }}</td>
                            @endforeach
                            <td>
                                <button class="btn btn-secondary "><i class="fas fa-edit"></i>Edit</button>
                                <button class="btn btn-danger "><i class="fas fa-trash-alt"></i>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $products->links() !!}
        </div>
    </div>
</div>


@endsection