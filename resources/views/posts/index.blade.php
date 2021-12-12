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
                <p class='body'>{{ $post->body }}</p>
            </div>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method("DELETE")
                <button type=button id = 'delete_btn' onClick='return test_func(this);'>delete</button>
            </form>
            @endforeach
            <script>
                function test_func(e) {
                    const id_data = 'form_' + '{{ $post->id}}'
                    'use strict'
                    const choice = window.confirm('本当に削除してもよろしいですか？');
                    if (choice){
                        document.getElementById(id_data).submit();
                    }
                }
            </script>
        </div>
        <div class='paging'>
            {{ $posts->links() }}
        </div>
    </body>
</html>