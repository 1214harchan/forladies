@extends('layouts.userblade')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>
    フォーレディース/管理者ログイン
  </title>
</head>

<body>
  <div>
    <div>
      <div>
        <form>
          <table>
            <tr>
              <th>管理者ID: </th>
              <td><input type="text" name="id" ></td>
            </tr>
            <tr>
              <th>管理者パスワード: </th>
              <td><input type="password" name="password" ></td>
            </tr>
            <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
          </table>
      </form>
      </div>  
    </div>
  </div>
</body>
</html>