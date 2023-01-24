<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


 
  <div class="row">
  <h1>新規登録</h1>
  <form action="/signup" method="post" class="form-horizontal" style="margin-top: 50px;">
  @csrf
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputName">氏名</label>
  <div class="col-sm-9">
  <input type="text" name="name" class="form-control" id="InputName" placeholder="氏名">
  @error('name')
  <div class="mt-3">
      <p class="text-red-500">
          {{ $message }}
      </p>
  </div>
  @enderror
  <!--/.col-sm-10---></div>
  <!--/form-group--></div>
 
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputEmail">メール・アドレス</label>
  <div class="col-sm-9">
  <input type="email" name="email" class="form-control" id="InputEmail" placeholder="メール・アドレス">
  </div>
  @error('email')
  <div class="mt-3">
      <p class="text-red-500">
          {{ $message }}
      </p>
  </div>
  @enderror
  <!--/form-group--></div>
 
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputPassword">パスワード</label>
  <div class="col-sm-9">
  <input type="password" name="password" class="form-control" id="InputPassword" placeholder="パスワード">
  </div>
  @error('password')
  <div class="mt-3">
      <p class="text-red-500">
          {{ $message }}
      </p>
  </div>
  @enderror
  <!--/form-group--></div>
 
  <div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">
  <button type="submit" class="btn btn-primary btn-block">新規登録</button>
  </div>
  <!--/form-group--></div>
  </form>
  </div>

</html>