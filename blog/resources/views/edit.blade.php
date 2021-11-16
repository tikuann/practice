<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__material'>
                <h2>本文</h2>
                <input type='text' name='post[material]' value="{{ $post->material }}">
            </div>
            <div class="content__procedure">
                <h4>手順</h4>
                <input type='text' name='post[procedure]' value="{{ $post->procedure }}">
            </div>
            <div class="content__quote">
                <h5>引用</h5>
    　           <input type='text' name='post[quote]' value="{{ $post->quote }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>

