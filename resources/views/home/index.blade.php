@extends('layout.app')
@section('content')
    <div class="container-xl py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            @foreach($products as $product)
                <div class="col">
                    @include('app.product')
                </div>
            @endforeach
        </div>
    </div>
@endsection