@extends('index')

@section('content')

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
                        @foreach($bookings as $booking)
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="operation" value="delete">
                                <input type="hidden" name="id" value="{{ $booking->id }}">
                                <tr>
                                
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->product['name'] }}</td>
                                    <td>{{ $booking->amount }}</td>
                                    <td>{{ $booking->total_price }}</td>
                                    <td>
                                        <button type="button" name="edit" data-product="{{ $booking }}" class="btn btn-secondary edit-button" data-toggle="modal" data-target="#editModal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="submit" name="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button> 
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>

                {!! $bookings->links() !!}
            </div>
        </div>
    </div>
@endsection
