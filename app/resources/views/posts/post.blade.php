
<h2 class="blog-post-title">
    <a href="/posts/{{ $post->id }}">
        {{$post->title}}        
    </a>
</h2>
<p>{{$post->created_at->toFormattedDateString() }}</p>
<p>{{$post->body}}</p>