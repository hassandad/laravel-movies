<div class="blog-post">
    @if(count($film))
    <h2 class="blog-post-title"><a href='posts/{{$film->id}}'>{{$film->name}}</a></h2>
    <p>Created At {{$film->created_at->toCookieString()}}</p>
    {{$film->description}}
    @endif
</div><!-- /.blog-main -->