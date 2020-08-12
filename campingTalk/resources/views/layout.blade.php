<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','campingTalk')</title>
    </head>
    <body>
        <h1><a href="/">@yield('subTitle','campingTalk')</a></h1>
        <ul>
            <li><a href="/login">로그인</a></li>
            <li><a href="/register">회원가입</a></li>
            <li><a href="/admin">관리자페이지</a></li>
        </ul>
        <ul>
            <li><a href="/review">제품리뷰</a></li>
            <li><a href="/qna">캠핑QnA</a></li>
            <li><a href="/mypage">마이페이지</a></li>
            <li><a href="/notice">공지사항</a></li>
        </ul>
    </body>
</html>
