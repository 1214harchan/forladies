@extends('common.content')
@section('title', '新規登録')
@section('content')
<div class="container">
          <h1 class="h1-seo">フォーレディース</h1>
          <h3>レズビアン(女性が好きな女性)のためのマッチングサービス</h3>
          <a href="register">新規登録</a><br>
          <a href="login">ログイン</a>
      </div>
    </div>
    @endsection
    @section('footervalue')
    @include('common.footer',['url'=> route('/')])
    <footer class="footer" data-background-color="black">
    @endsection