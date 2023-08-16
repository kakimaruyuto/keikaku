<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel_07-1</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark blue-gradient">
        <a class="navbar-brand" href="top_page.html">Autumn</a>
        <ul class="navbar-nav ml-auto">
    
            <li class="nav-item">
                <a class="nav-link" a href="{{ route('add_form') }}">投稿する</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" a href="{{ route('edit_form') }}"></a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" a href="{{ route('login_form') }}">ログイン</a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="#">ログアウト</a>
            </li>
            <form id="logout-button" method="POST" action="#">
            </form>
        </ul>
    </nav>
    
<div class="card p-5 mt-5 w-50 mx-auto">
    <form method="POST" action="{{ route('submit', ['id' => $memo->id])}}">

        <h1 class="h3 mb-3 fw-normal text-center">メモを編集する</h1>

        <!-- Title input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example2">タイトル</label>
            <input type="text" id="form4Example2" class="form-control"/>
            <td>{{$memo->title}}</td>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">テキスト</label>
            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
            <td>{{$memo->text}}</td>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">メモを編集する</button>
    </form>
</div>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>
</html>
