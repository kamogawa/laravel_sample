@extends('board.layout.default')

@section('title') {{$contents->title}} @stop
@section('content')
<div class="row vertical-align">
  <div class="col-md-8">
    <h4>{{$contents->title}}</h4>
  </div>
  <div class="col-md-4 text-right">
    <p>作成者 : {{$contents->reg_user_name}} 作成日 : {{$contents->created_at}}</p>
  </div>
</div>
<div class="content">
  {{$contents->contents}}
</div>
<div class="vertical-align">
  <div class="col-md-8"></div>
  <div class="col-md-3 text-right ">
    <div class="btn-group" role="group">
      @if (Session::has('login'))
        <button type="button" id="editFormBtn" class="btn btn-default">修正</button>
        <button type="button" id="delBtn" class="btn btn-default">削除</button>
      @endif
        <button type="button" id="listBtn" class="btn btn-default">戻る</button>
    </div>
  </div>
  <div class="col-md-1 btn-group text-right">
    @if (Session::has('login'))
      <button class="btn btn-default" id="logoutBtn" type="button">ルグアウト</button>
    @else
      <button class="btn btn-default" id="loginFormBtn" type="button">ログイン</button>
    @endif 
  </div>
</div>
<script>
  $(document).ready(function(){
    $("#editFormBtn").click(function(){
      location.href = "/edit-form?pageid={{$pageid}}";
    });
    $("#delBtn").click(function(){
      location.href = "/delete?pageid={{$pageid}}";
    });
    $("#listBtn").click(function(){
      location.href = "/list";
    });
    $("#loginFormBtn").click(function(){
      location.href = "/login-form";
    });
    $("#logoutBtn").click(function(){
      location.href = "/logout";
    });
  });
</script>
@stop
