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

        {{-- @foreach ($Stores as $detail) --}}
        <div class="review">
            <div class="storephoto">
                <a href=""><img src="" alt="店舗写真"></a>
            </div>
            <div class="add">
                <div class="word font">
                    <p>お気に入りに追加</p>
                </div>
                <a href=""><img src="./css/rogo_okiniiri.jpg" alt="お気に入り星"></a>
                <a href=""><img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="info font">
                {{-- <p>{{$detail->name}}</p>
                <p>{{$detail->address}}</p>
                <p>{{$detail->category_id}}</p>
                <p>{{$detail->price}}</p> --}}
                <p>（評価のポイント平均引っ張る）</p>
                <button><a href="">詳細</a></button>
            </div>
            <div class="comment font">
                <p>（ユーザーネーム引っ張る）さんの口コミ</p>
                <p>投稿日時：（create時間引っ張る）</p>
                <p>（評価引っ張る）</p>
                <p>（コメント引っ張る）</p>
                <button><a href="">続きを見る・・・</a></button>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>


</body>
</html>