@extends('layout')

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
@endpush

@push('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
<script>()
    document.getElementById('slide').slick()();
</script>
@endpush


@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 header">
            <h2 class="display-5">{{ isset($title) ? $title : "Users" }}</h2>
            <p class="lead">
                Laravel utilizes Composer to manage its dependencies. 
                So, before using Laravel, make sure you have Composer 
                installed on your machine
            </p>
        </div>
        <div id="slide" class="col-md-8">
            <div>Slide1</div>
            <div>Slide2</div>
            <div>Slide3</div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Name</h4>
                    @if( $users->count() > 0 )
                        <ul class="list-group">
                            @foreach($users as $user)
                            <li class="list-group-item">{{ $user->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Email</h4>
                    @if( $users->count() > 0 )
                        <ul class="list-group">
                            @foreach($users as $user)
                            <li class="list-group-item">{{ $user->email }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

