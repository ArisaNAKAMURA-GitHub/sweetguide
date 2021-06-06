<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>

    </header>

    <div class="container">
        <div class="subject">
            <div class="search">
                <h2 class="subject font">検索結果</h2>
                <button class="all_clear font"><form action="">検索条件をリセット</form></button>
                <h3 class="selected font">指定条件</h3>
                <ul class="selected_conditions font">(条件が入る）</ul>
            </div>
        </div>

        @foreach ($Stores as $detail)
        <div class="review">
            <div class="storephoto">
                <a href=""><img src="{{?????あとで書く}}" alt="店舗写真"></a>
            </div>
            <div class="add">
                <div class="word font">
                    <p>お気に入りに追加</p>
                </div>
                <a href=""><img src="./css/rogo_okiniiri.jpg" alt="お気に入り星" class="rogo"></a>
                <a href="{{route('sweets.create')}}"><img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="info font">
                <p>{{$store->name}}（店舗名引っ張る）</p>
                <p>{{$store->address}}（住所引っ張る）</p>
                <p>{{$store->category_id}}（カテゴリ引っ張る）</p>
                <p>{{$store->price}}（価格引っ張る）</p>
                {{-- 一旦保留<p>（評価のポイント平均引っ張る）</p> --}}
                <button><a href="{{route('sweets.show', $store->id)}}">詳細</a></button>
            </div>
            <div class="comment font">
                <p>（{{$user->name}}ユーザーネーム引っ張る）さんの口コミ</p>
                <p>投稿日時：{{$review->published_at}}（create時間引っ張る）</p>
                <p>{{$review->review}}（評価引っ張る）</p>
                <p>{{$review->comment}}（コメント引っ張る）</p>
                <button><a href="{{route('sweets.show', $review->id)}}">続きを見る・・・</a></button>
            </div>
        </div>
        @endforeach
    </div>


</body>
</html>