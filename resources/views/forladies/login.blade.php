@extends('layouts.userblade')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>
    フォーレディース/ログイン
  </title>
</head>

<body>
<form　action="mypage" method="post">
  <table>
    @csrf
    @error()
      <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <th>ID: </th>
      <td><input type="text" name="id" ></td>
    </tr>
    @error()
      <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <th>パスワード: </th>
      <td><input type="password" name="password" ></td>
    </tr>
    <tr>
      <th></th><td><input type="submit" value="ログイン"></td>
    </tr>
  </table>
</form>
<footer>
<a href="forladies">トップに戻る</a>
</footer>
</body>
</html>