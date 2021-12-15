<!DOCYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <a hfef=''>{{ $post->category->name }}</a>
        <div class='content'>
            <div class="content_post">
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <footer>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <a href="/">戻る</a>
        </footer>
    </body>
</html>