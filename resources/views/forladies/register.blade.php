@extends('layouts.userblade')
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>
    フォーレディース/新規登録
  </title>
</head>
<body>
   <p>※全て必須入力</p>
   <form action="newuser" method="post">
     <table>
     @error('mail')
       <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
       </tr>
     @enderror
   <tr>
     <th>メールアドレス: </th>
     <td><input type="text" name="mail" value="{{old('mail')}}"></td>
   </tr>
   @error('password')
       <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
       </tr>
    @enderror
     <tr>
      <th>パスワード: </th>
      <td><input type="password" name="password" value="{{old('password')}}"></td>
    </tr>
   @error('password_confirmation')
       <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
       </tr>
     @enderror
     <tr>
      <th>パスワード(確認用): </th>
      <td><input type="password" name="password_confirmation"  value="{{old('password_confirmation')}}"></td>
   </tr>
   <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
  </form>
  <footer>
   <a href="forladies">トップに戻る</a>
  </footer>
</body>
</html>