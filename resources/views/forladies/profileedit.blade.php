<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>
    フォーレディース/プロフィール編集
  </title>
</head>

<body class="index-page sidebar-collapse">
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/avatar.jpg');">
      </div>
      <div class="container">
        <p>※*は必須入力</p>
        <form action="" method="post">
          <lavel>・名前*</lavel><input type="text" name="name" value="{{old('name')}}"><br>
          <lavel>・生年月日*</lavel>
          <select name="birthyear">
            <option value="">選択して下さい</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
          </select>年
          <select name="birthmonth">
            <option value="">選択して下さい</option>
            @for ($i=1; $i<=12; $i++)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>月
          <select name="birthday">
            <option value="">選択して下さい</option>
            @for ($i=1; $i<=31; $i++)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>日<br>
          <lavel>・都道府県*</lavel>
          <select name="address">
            <option value="">選択して下さい</option>
            @foreach (config('const.common.Prefecture') as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
            @endforeach
          </select><br>
          <lavel>・見た目</lavel>
          <input type="radio" name="looks" value="boish">ボーイッシュ
          <input type="radio" name="looks" value="chusei">中性
          <input type="radio" name="looks" value="fem">フェム<br>
          <lavel>・セク</lavel>
          <input type="radio" name="sexual" value="tachi">タチ
          <input type="radio" name="sexual" value="riva">リバ
          <input type="radio" name="sexual" value="neko">ネコ
          <lavel>※タチ:攻め、リバ:両方、ネコ:受け</lavel><br>
          <lavel>・喫煙の有無</lavel>
          <input type="radio" name="cigarette" value="0">無
          <input type="radio" name="cigarette" value="1">有<br>
          <lavel>・飲酒の有無</lavel>
          <input type="radio" name="alchol" value="0">無
          <input type="radio" name="alchol" value="1">有<br>
          <lavel>・婚姻の有無</lavel>
          <input type="radio" name="marrige" value="single">未婚
          <input type="radio" name="marrige" value="marriged">既婚
          <input type="radio" name="marrige" value="divorced">離婚済み<br>
          <lavel>・出会いの目的</lavel>
          <input type="checkbox" name="purpose" value="partner">恋人募集
          <input type="checkbox" name="purpose" value="friends">友達募集<br>
          <lavel>・子供の有無</lavel>
          <input type="radio" name="children" value="none">無
          <input type="radio" name="children" value="family">有(同居中)
          <input type="radio" name="children" value="independenced">有(別居中)<br>
          <input type="file"><br>
          <lavel>＜相手への希望条件＞</lavel><br>
          <lavel>・相手の年齢<input type="text" name="hopeminage">歳から<input type="text" name="hopemaxage">歳まで</lavel><br>
          <lavel>・相手の都道府県</lavel>
          <select name="hopeaddress" multiple>
            <!--const('const.common.PREFECTURE.'.$prefecture)-->
            @foreach (config('const.common.Prefecture') as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
            @endforeach
          </select><br>
          <lavel>・相手の見た目</lavel>
          <input type="checkbox" name="hopelooks[]" value="boish">ボーイッシュ
          <input type="checkbox" name="hopelooks[]" value="chusei">中性
          <input type="checkbox" name="hopelooks[]" value="fem">フェム<br>
          <lavel>・相手のセク</lavel>
          <input type="checkbox" name="hopesexual[]" value="tachi">タチ
          <input type="checkbox" name="hopesexual[]" value="riva">リバ
          <input type="checkbox" name="hopesexual[]" value="neko">ネコ
          <lavel>・相手の喫煙の有無</lavel>
          <input type="checkbox" name="hopecigarette[]" value="0">無
          <input type="checkbox" name="hopecigarette[]" value="1">有<br>
          <lavel>・相手の飲酒の有無</lavel>
          <input type="checkbox" name="hopealchol[]" value="0">無
          <input type="checkbox" name="hopealchol[]" value="1">有<br>
          <lavel>・相手の婚姻の有無</lavel>
          <input type="checkbox" name="hopemarrige[]" value="single">未婚
          <input type="checkbox" name="hopemarrige[]" value="marriged">既婚
          <input type="checkbox" name="hopemarrige[]" value="divorced">離婚済み<br>
          <lavel>・相手の出会いの目的</lavel>
          <input type="checkbox" name="hopepurpose[]" value="partner">恋人募集
          <input type="checkbox" name="hopepurpose[]" value="friends">友達募集<br>
          <lavel>・相手の子供の有無</lavel>
          <select name="hopechildren">
            <option value="">選択して下さい</option>
            <option value="noproblem">気にしない</option>
            <option value="problem">一緒には住みたくない</option>
          </select><br>
          <input type="file"><br>
          <input type="submit" value="保存">
      </form>
      </div>
    </div>
   <footer>
      <div>
        <a href="mypage">マイページトップに戻る</a>
      </div>
    </footer>
  </div>
</body>

</html>