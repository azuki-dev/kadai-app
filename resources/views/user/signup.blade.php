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
  <button type="submit" class="btn btn-primary btn-block" id="btnSubmit">新規登録</button>
  </div>
  <!--/form-group--></div>
  </form>
  <script>
            window.onload = function(){
                /*各画面オブジェクト*/
                const btnSubmit = document.getElementById('btnSubmit');
                const InputName = document.getElementById('InputName');
                const InputEmail = document.getElementById('InputEmail');
                const InputPassword = document.getElementById('InputPassword');
                
                btnSubmit.addEventListener('click', function(event) {
                    let message = [];
                    /*入力値チェック*/
                    const Namereg = /{140,}/;
                    const Passreg = /^(?=.*[A-Z])[a-zA-Z0-9.?/-]{8,}$/;


                    if(InputName.value ==""){
                        message.push("氏名が未入力です。");
                    }else if(!Namereg.test(InputName.value)){
                        message.push("使用できない文字が入っています。");
                    }
                    if(InputEmail.value==""){
                        message.push("メールアドレスが未入力です。");
                    }else if(AND()) {
                        message.push("メールアドレスの形式が不正です。");
                    }
                    if(InputPassword.value=="") {
                        message.push("パスワードが未入力です。");
                    } else if(!Passreg.test(InputPassword.value)){
                        message.push("パスワードの大文字小文字2つずつ入れてください。");
                    }
                    if(message.length > 0){
                        alert(message);
                        return;
                    }
                    alert('送信成功');
                });
            };
        </script>
  </div>

</html>