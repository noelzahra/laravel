@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h3>Publish a post</h3>

        <div class="form-container">
            <form method="POST" action="/posts">
                {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Blog title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" placeholder="Blog content" name="body" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div> <!-- ./form-container -->
        
    </div>
    
@endsection