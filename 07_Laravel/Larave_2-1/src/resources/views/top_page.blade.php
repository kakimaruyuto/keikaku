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
    
<main class="p-5">
    <!-- カード部分　ここから繰り返し -->
    @foreach ($memos as $memo)
    <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <a href="#" class="text-dark">
                <i class="fas fa-user-circle fa-3x mr-1"></i>
            </a>
            <div>
                <div class="font-weight-bold">
                    <a href="#" class="text-dark">
                    <td>{{$users->name}}</td>
                    </a>
                </div>
                <div class="font-weight-lighter">
                   <td>{{$memo->timestamps}}</td>
                </div>
            </div>

            <!-- dropdown -->
            <div class="ml-auto card-text">
                <div class="dropdown">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button type="button" class="btn btn-link text-muted m-0 p-2">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="edit_form.html">
                            <td><a href="{{ route('submit', ['id' => $memo->id])}}">記事を更新する
                        </a></td>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" data-toggle="modal"
                           data-target="#modal-delete-id">
                            <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                        </a>
                    </div>
                </div>
            </div>
            <!-- dropdown -->

            <!-- modal -->
            <div id="modal-delete-id" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="#">
                            <div class="modal-body">
                                タイトルを削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <td><a href="{{ route('delete', ['id' => $memo->id])}}">削除する</td></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </div>
        <div class="card-body pt-0 pb-2">
            <h3 class="h4 card-title">
                <a class="text-dark" href="#">
                    カードタイトル
                </a>
            </h3>
        </div>
    </div>
    @endforeach
    <!-- カード部分　ここまでを繰り返し -->
</main>


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
