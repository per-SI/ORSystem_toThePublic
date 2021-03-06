<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>ショップ選択</title>
</head>
<body>



    <div class="position-relative vw-100 vh-100" style="background-image: url('{{asset('background_img1.png')}}'); background-color: rgba(247,248,250,0.65); background-blend-mode:hue;">
        <div class="position-absolute" style="top: 5vh; left:4vw;">
            <h2 class="fw-bold" style="color:#c79605; font-size:xx-large; font-weight:">Order <span style="color:rgb(120, 119, 119)">&</span> Replace</h2>
        </div>
        <div style="max-height: 40vh; max-width: fit-content; background-color: white; border: 5px solid #8e9fb0!important;" class="container position-absolute top-50 start-50 translate-middle border-5 overflow-auto mh-50">
            <div class="row row-cols-2">
            @foreach($shopList as $shop)
              <div style="text-align:center;  border: 1px solid #6e7e9d!important;" class="col border-2"><a class="text-decoration-none" style="color:#283593;" href="/ORsystem/{{$shop["shop"]}}">{{$shop["shop"]}}</a></div>
            @endforeach
            </div>
          </div>

        <div class="position-absolute shadow-sm bg-body rounded start-50 translate-middle" style="top:30vh; font-size:small;">
            <a href="/orderandreplace/newWall" class="border border-1 text-decoration-none" style=" color:#4d7395; background-color:;">新しいSHOP&ラックを作成</a>
        </div>

        <div class="position-absolute shadow-sm bg-body rounded start-50 translate-middle" style="bottom:15vh; border: 1px solid black;">
            <a href="/orderandreplace/registerPage" class="border border-1 text-decoration-none" style=" color:#4d7395">Item登録</a>
        </div>

        <form class="position-absolute shadow-sm bg-body rounded" id="logout-form" action="{{ route('logout') }}" method="POST" style="top: 1vh; right: 7vw;position: absolute; font-size:small;">
            @csrf
            <button type="submit" style="border: 1px solid darkgray; color:gray;">ログアウト</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
