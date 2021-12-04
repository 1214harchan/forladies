<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    フォーレディース/新規登録
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="index-page sidebar-collapse">
  <div class="wrapper">
     <div class="page-header clear-filter" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/avatar.jpg');">
      </div>
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
  </div>
      <footer class="footer" data-background-color="black">
      <div class=" container ">
      <a href="forladies">トップに戻る</a>
      <div class="copyright" id="copyright">
        &copy;
       <script>
         document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
       </script>, Designed by
       <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
       <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </footer>
      </div>
      <!--   Core JS Files   -->
      <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
      <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
      <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
      <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
      <script src="./assets/js/plugins/bootstrap-switch.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
      <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
      <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
      <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
      <script>
        $(document).ready(function() {
          // the body of this function is in assets/js/now-ui-kit.js
          nowuiKit.initSliders();
        });
    
        function scrollToDownload() {
    
          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      </script>
</body>
</html>