<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__material">
                <h3>素材</h3>
                <p>{{ $post->material }}</p>    
            </div>
            <div class="content__procedure">
                <h4>手順</h4>
                <p>{{ $post->procedure }}</p> 
            </div>
            <div class="content__quote">
                <h5>引用</h5>
                <p>{{ $post->quote}}</p> 
            </div>
        </div>
        <form method="POST" action=""/posts/{{ $post->id }}" id="form_{{ $post->id }}"" onsubmit="return submitChk()">
　　　　    @csrf
　　　　    @method('DELETE')
  　　　　<input type="submit" value="delete" /> 
　　　　</form>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
        <script>
          function submitChk () {
              var flag = confirm ( "削除してもよろしいですか？\n\n削除したくない場合は[キャンセル]ボタンを押して下さい");
      　　  　   return flag;
          } 
        </script>
    </body>
</html>

