<!DOCYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog</h1>
        <div class='posts'>
            <a href='/posts/create'>create</a>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <p class='body'>{{ $post->body }}</p>
            </div>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method("DELETE")
                <button type=button id = 'delete_btn' onClick='return alert_func(this);'>delete</button>
            </form>
            @endforeach
            <script src="{{ asset('/js/alert.js') }}">
                
            </script>
        </div>
        <div class='paging'>
            {{ $posts->links() }}
        </div>
    </body>
</html>