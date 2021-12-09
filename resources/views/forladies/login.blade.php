@extends('common.content')
      @section('title', 'ログイン')
      @section('content')
      <div class="container">
<form　action="{{ route('mypage')}}" method="post">
  @csrf
  <table>
    <tr>
      <th></th>
      <td>ユーザーIDとパスワードを入力し、「ログイン」ボタンを押してください。</td>
    </tr>
    @error('id')
      <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <th>ユーザーID: </th>
      <td><input type="text" name="id"  value="{{old('id')}}"></td>
    </tr>
    @error('password')
      <tr>
        <th>入力エラー</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <th>パスワード: </th>
      <td><input type="password" name="password" value="{{old('password')}}" ></td>
    </tr>
    <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
 </table>
</form>
</div>
@endsection
@section('footervalue')
@include('common.footer',['url'=> route('/')])
<footer class="footer" data-background-color="black">
@endsection