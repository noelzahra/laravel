@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>{{ $product->title}}</h2>
                @if($categories->count())
                    <ul class="list-group">
                        @foreach($categories as $category)
                        <li class="list-group-item">{{$category->title}}</li>
                        @endforeach
                    </ul>
                @endif

                {{$categories->links()}}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection