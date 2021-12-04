      @extends('common.content')
      @section('title', '新規登録')
      @section('content')
      <div class="container">
      {{-- <form action="register" method="post"> --}}
      <form action="{{ route('newuser')}}" method="post">
      {{-- action="{{ route('edit', ['id' => $message->id]) }}" --}}
      @csrf
      <table>
      <tr>
      <th></th>
      <td>※全て必須入力</td>
      </tr>
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
    </div>
    @endsection
      @section('footervalue')
      @include('common.footer',['url'=> route('forladies')])
      <footer class="footer" data-background-color="black">
      <div class=" container ">
      <a href="forladies">トップに戻る</a>
      @endsection