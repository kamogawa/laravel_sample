@extends('board.layout.default')

@section('title') 修正 @stop

@section('content')
<form action="/edit" id="editForm" method="post">
  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="タイトルを入力してください。" value="{{$contents->title}}" required autofocus>
  </div>
  <div class="form-group">
    <textarea name="contents" class="form-control" rows="5" required>{{$contents->contents}}</textarea>
  </div>
  <input type="hidden" name="pageid" value="{{ $pageid }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="vertical-align">
    <div class="col-md-11 text-right">
      <button class="btn btn-primary" type="submit">修正</button>
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