@extends('test.layout')

{{-- メインコンテンツ --}}
@section('contents')
        <form action="/test/input" method="post">
            email:<input name="email"><br>
            パスワード:<input name"password" type="password"><br>
            <button>送信する</button>
        </form>
@endsection