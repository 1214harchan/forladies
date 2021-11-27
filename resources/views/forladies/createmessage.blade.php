@extends('layouts.userblade')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>
    フォーレディース/メッセージ作成
  </title>
</head>

<body>
  <div>
    <div>
      <div>
        <form action="" method="post">
        <p>メッセージ内容は必須入力</p>
        タイトル:<input type="text" name="title"><br><br>
        内容<br>
        <textarea></textarea><br>
        <input type="submit" value="送信">
      </form>
      </div>
    </div>
   <footer>
        <a href="mypage">マイページトップに戻る</a>
    </footer>
  </div>
</body>
</html>