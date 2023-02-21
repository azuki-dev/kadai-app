<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 投稿</title>
</head>
<!-- 投稿画面 -->

<body class="">
    <x-header></x-header>
    <div class="page post-page">
        <form class="form" action="/post" method="post">
            @csrf
            <textarea name="postContent" id="Inputpost" cols="30" rows="5" placeholder="いまどうしてる?"></textarea>
            <div class="post-button">
                <button class="button-white" type="submit" id=btnsubmit>投稿する</button>
            </div>
            @error('postContent')
                  <div class="mt-3">
                      <p class="text-red-500">
                          {{ $message }}
                      </p>
                  </div>
              @enderror
        </form>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
            window.onload = function(){
                /*各画面オブジェクト*/

                btnsubmit.addEventListener('click', function(event) {
                 const Inputsubmit = document.getElementById('btnsubmit');
                 const InputPost = document.getElementById('Inputpost');
                 const max_length = 140;
                 const count = (InputPost . value) .length;

                 let message = [];
               
                    if(InputPost.value == ""){
                        message.push(" 文章が未入力です。");
                    }
                    if(count > max_length){
                        message.push(" 140文字以内にしてください。");
                    }

                    if(message.length > 0){
                        alert(message);
                        return;
                    }
                    alert('送信成功');
                });
            };
        </script>
<style scoped>
    .post-page .form {
        display: flex;
        flex-direction: column;
    }
    
    .post-page .post-button {
        text-align: end;
        margin: 20px 20px 0 0;
    }
    
    .post-page button {
        height: 35px;
        width: 90px;
    }
</style>

</html>