@extends('common.content')
      @section('title', '新規登録完了')
      @section('content')
      <div class="container">
        <p>新規登録完了</p>
        <p>ユーザーID: {{$id}} </p>
        <a href="login">ログイン</a>
      </div>
      @endsection
        @section('footervalue')
        @include('common.footer',['url'=> route('/')])
        <footer class="footer" data-background-color="black">
        @endsection