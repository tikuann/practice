<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>晩御飯</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>晩御飯、なんでもいいや・・・</h1>
        <div class='create'>
            <form action="/recuoe" method="POST">
                @csrf
                <div class='title'>
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}">
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class='material'>
                    <h3>材料</h3>
                    <input type="text" name="post[material]" placeholder="材料" value="{{ old('post.material') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.material') }}</p>
                </div>
                <div class='procedure'>
                    <h3>作り方</h3>
                    <input type="text" name="post[procedure]" placeholder="作り方" value="{{ old('post.procedure') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.procedure') }}</p>
                </div>
                    <div class='quote'>
                    <h3>引用</h3>
                    <input type="text" name="post[quote]" placeholder="引用" value="{{ old('post.quote') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.quote') }}</p>
                </div>        
                
                <h2>カテゴリー</h2>
  　　　　　　　　      @foreach($subjects as $subject)

        　　　    <label>
                {{}}
                <input type="checkbox" value="{{ $subject->id }}" name="subjects_array[]">
                    {{$subject->subject_name}}
                </input>
        　　　　    </label>
            
                @endforeach 
                <input type="submit" value="保存"/>
            </form>
            <div class="back">[<a href="/list">back</a>]</div>
        </div>
    </body>
</html>

