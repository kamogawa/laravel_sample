@extends('board.layout.default')

@section('title') 登録 @stop

@section('content')
<form action="/add" id="addForm" method="post" >
  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="タイトルを入力してください。" required autofocus>
  </div>
  <div class="form-group">
    <textarea name="contents" class="form-control" rows="5" required></textarea>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="vertical-align">
    <div class="col-md-11 text-right">
      <button class="btn btn-primary" type="submit">登録</button>
    </div>
    <div class="col-md-1 text-left ">
      <button class="btn btn-default" id="listBtn" type="button">戻る</button>
    </div>
  </div>
</form>
<script>
  $(document).ready(function(){
    $("#listBtn").click(function(){
      location.href = "/list";
    });
  });
</script>   
@stop