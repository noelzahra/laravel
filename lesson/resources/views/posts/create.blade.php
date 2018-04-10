<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:40px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h2 class="title">Create a post</h2>
                <form method="POST" action="/posts">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" value = "{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea type="text" name="body" class="form-control" >
                            {{ old('body') }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create Post</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>