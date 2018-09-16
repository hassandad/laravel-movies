<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="/films">List Films</a>
        <a class="p-2 text-muted" href="/films/create">Create Film</a>
        @if(Auth::check())
            <a class='nav-link ml-auto'href='#'>{{ Auth::user()->name }}</a>
        @endif
    </nav>
</div>
