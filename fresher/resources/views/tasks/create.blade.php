@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
      @include('common.errors')

      <div class="card-title mb-6"><h4>Task</h4></div>
        <form action="{{ url('task')}}" method="post" class="row">
          {{ csrf_field()}}
            <div class="form-group col-md-9">
              <div class="col-md-12">
                <input type="text" name="name" id="name" class="form-control form-control-lg">
              </div>
            </div>
            <div class="form-group col-md-3">
              <div class="col-sm-offset-2">
                <button type="submit" class="btn-primary btn-lg">Add task</button>
              </div>
            </div>
            {{--  {{ csrf_token() }}  --}}
        </form>
    </div>
</div>
@endsection