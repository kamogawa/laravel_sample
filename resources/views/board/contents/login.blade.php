@extends('board.layout.default')

@section('title') ログイン @stop

@section('content')
  <div>
    <form class="form-signin" action="login-user" method="post">
      <h2>ログイン</h2>
      <input type="email" name="email" class="form-control" placeholder="メール" required autofocus>
      <input type="password" name="password" class="form-control" placeholder="パスワード" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
      @csrf
    </form>
  </div>
@stop