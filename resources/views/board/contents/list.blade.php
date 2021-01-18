@extends('board.layout.default')

@section('title') laravel勉強会 @stop

@section('content') 
  <div class="panel panel-default">
    <table class="table">
      <thead>
        <tr>
          <th class="col-md-1">#</th>
          <th class="col-md-6">タイトル</th>
          <th class="col-md-2">作成者</th>
          <th class="col-md-2">作成日</th>
          <th class="col-md-1">閲覧数</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contents as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td><a href="/view?pageid={{ $item->id }}">{{ $item->title }}</a></td>
          <td>{{ $item->reg_user_name }}</td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->view_count }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="vertical-align">
    <div class="col-md-8">
      <?php echo $contents->render(); ?>
    </div>
    <div class="col-md-3 text-right ">
      @if (Session::has('login'))
        <button type="button" id="addFormBtn" class="btn btn-default btn-primary">登録</button>
      @endif
    </div>
    <div class="col-md-1 btn-group text-right">
      @if (Session::has('login'))
        <button class="btn btn-default" id="logoutBtn" type="button"> ログアウト </button>
      @else
        <button class="btn btn-default" id="loginFormBtn" type="button"> ログイン </button>
      @endif 
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#addFormBtn").click(function(){
        location.href = "/add-form";
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
