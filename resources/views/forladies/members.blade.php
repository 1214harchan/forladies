@extends('common.content')
@section('title', '会員一覧')
@section('content')
<div class="container">
 <table>
   <tr><th><a href=""></th><th><a href=""></th><th><a href=""></th><th><a href=""></th><th><a href=""></th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->mail}}</td>
      </tr>
    @endforeach
 </table>
</div>
@endsection
@section('footervalue')
@include('common.footer',['url'=> route('/')])
<footer class="footer" data-background-color="black">
@endsection