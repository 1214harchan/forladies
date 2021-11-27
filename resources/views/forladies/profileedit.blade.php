@extends('layouts.userblade')
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
          <lavel>・名前*</lavel><input type="text" name="name" ><br>
          <lavel>・年齢:歳</lavel><br>
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
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>月
          <select name="birthday">
            <option value="">選択して下さい</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>日<br>
          <lavel>・都道府県*</lavel>
          <select name="address">
            <option value="">選択して下さい</option>
            <option value="hokkaido">北海道</option>
            <option value="aomori">青森県</option>
            <option value="iwate">岩手県</option>
            <option value="miyagi">宮城県</option>
            <option value="akita">秋田県</option>
            <option value="yamagata">山形県</option>
            <option value="fukushima">福島県</option>
            <option value="ibaragi">茨城県</option>
            <option value="tochigi">栃木県</option>
            <option value="gunma">群馬県</option>
            <option value="saitama">埼玉県</option>
            <option value="chiba">千葉県</option>
            <option value="tokyo">東京都</option>
            <option value="kanagawa">神奈川県</option>
            <option value="nigata">新潟県</option>
            <option value="toyama">富山県</option>
            <option value="ishikawa">石川県</option>
            <option value="fukui">福井県</option>
            <option value="yamanashi">山梨県</option>
            <option value="nagano">長野県</option>
            <option value="gifu">岐阜県</option>
            <option value="sizuoka">静岡県</option>
            <option value="aichi">愛知県</option>
            <option value="mie">三重県</option>
            <option value="siga">滋賀県</option>
            <option value="kyoto">京都府</option>
            <option value="osaka">大阪府</option>
            <option value="hyogo">兵庫県</option>
            <option value="nara">奈良県</option>
            <option value="wakayama">和歌山県</option>
            <option value="tottori">鳥取県</option>
            <option value="shimane">島根県</option>
            <option value="okayama">岡山県</option>
            <option value="hiroshima">広島県</option>
            <option value="yamaguchi">山口県</option>
            <option value="tokushima">徳島県</option>
            <option value="kagawa">香川県</option>
            <option value="ehime">愛媛県</option>
            <option value="kochi">高知県</option>
            <option value="fukuoka">福岡県</option>
            <option value="saga">佐賀県</option>
            <option value="nagasaki">長崎県</option>
            <option value="kumamoto">熊本県</option>
            <option value="oita">大分県</option>
            <option value="miyazaki">宮崎県</option>
            <option value="kagoshima">鹿児島県</option>
            <option value="okinawa">沖縄県</option>
            <option value="abroad">海外</option>
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
            <option value="">選択して下さい</option>
            <option value="hokkaido">北海道</option>
            <option value="aomori">青森県</option>
            <option value="iwate">岩手県</option>
            <option value="miyagi">宮城県</option>
            <option value="akita">秋田県</option>
            <option value="yamagata">山形県</option>
            <option value="fukushima">福島県</option>
            <option value="ibaragi">茨城県</option>
            <option value="tochigi">栃木県</option>
            <option value="gunma">群馬県</option>
            <option value="saitama">埼玉県</option>
            <option value="chiba">千葉県</option>
            <option value="tokyo">東京都</option>
            <option value="kanagawa">神奈川県</option>
            <option value="nigata">新潟県</option>
            <option value="toyama">富山県</option>
            <option value="ishikawa">石川県</option>
            <option value="fukui">福井県</option>
            <option value="yamanashi">山梨県</option>
            <option value="nagano">長野県</option>
            <option value="gifu">岐阜県</option>
            <option value="sizuoka">静岡県</option>
            <option value="aichi">愛知県</option>
            <option value="mie">三重県</option>
            <option value="siga">滋賀県</option>
            <option value="kyoto">京都府</option>
            <option value="osaka">大阪府</option>
            <option value="hyogo">兵庫県</option>
            <option value="nara">奈良県</option>
            <option value="wakayama">和歌山県</option>
            <option value="tottori">鳥取県</option>
            <option value="shimane">島根県</option>
            <option value="okayama">岡山県</option>
            <option value="hiroshima">広島県</option>
            <option value="yamaguchi">山口県</option>
            <option value="tokushima">徳島県</option>
            <option value="kagawa">香川県</option>
            <option value="ehime">愛媛県</option>
            <option value="kochi">高知県</option>
            <option value="fukuoka">福岡県</option>
            <option value="saga">佐賀県</option>
            <option value="nagasaki">長崎県</option>
            <option value="kumamoto">熊本県</option>
            <option value="oita">大分県</option>
            <option value="miyazaki">宮崎県</option>
            <option value="kagoshima">鹿児島県</option>
            <option value="okinawa">沖縄県</option>
            <option value="abroad">海外</option>
          </select><br>
          <lavel>・相手の見た目</lavel>
          <input type="checkbox" name="hopelooks" value="boish">ボーイッシュ
          <input type="checkbox" name="hopelooks" value="chusei">中性
          <input type="checkbox" name="hopelooks" value="fem">フェム<br>
          <lavel>・相手のセク</lavel>
          <input type="checkbox" name="hopesexual" value="tachi">タチ
          <input type="checkbox" name="hopesexual" value="riva">リバ
          <input type="checkbox" name="hopesexual" value="neko">ネコ
          <lavel>・相手の喫煙の有無</lavel>
          <input type="checkbox" name="hopecigarette" value="0">無
          <input type="checkbox" name="hopecigarette" value="1">有<br>
          <lavel>・相手の飲酒の有無</lavel>
          <input type="checkbox" name="hopealchol" value="0">無
          <input type="checkbox" name="hopealchol" value="1">有<br>
          <lavel>・相手の婚姻の有無</lavel>
          <input type="checkbox" name="hopemarrige" value="single">未婚
          <input type="checkbox" name="hopemarrige" value="marriged">既婚
          <input type="checkbox" name="hopemarrige" value="divorced">離婚済み<br>
          <lavel>・相手の出会いの目的</lavel>
          <input type="checkbox" name="hopepurpose" value="partner">恋人募集
          <input type="checkbox" name="hopepurpose" value="friends">友達募集<br>
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