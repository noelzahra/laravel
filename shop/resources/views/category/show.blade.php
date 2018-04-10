@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>{{ $category->title}}</h2>
                @if($products->count())
                    @foreach($products as $product)
                       <h4>{{$product->title}}</h4>
                       <p>${{number_format($product->price, 2)}}</p>
                    @endforeach
                @endif

                {{$products->links()}}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection