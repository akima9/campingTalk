<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <style>
            .title{
                font-family: 'Lobster', cursive;
                margin-top: 20px;
            }
        </style>
        
        <!-- bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>@yield('title','campingTalk')</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center title">
                    <h1><a href="/">CampingTalk</a></h1>
                </div>
                <div class="col-md-4 ml-auto">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">로그인</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">회원가입</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">관리자페이지</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-expand navbar-dark bg-primary">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/review_site">캠핑장 리뷰</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/review_item">제품 리뷰</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/qna">캠핑 QnA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mypage">마이페이지</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notice">공지사항</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <p class="h2">@yield('subTitle')</p>
            @yield('content')
        </div>
    </body>
</html>
