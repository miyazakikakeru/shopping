<p>
    下記の内容でお問い合わせがありました<br>
</p>

@component('mail::message')


[ お問い合わせ内容 ]

<p>名前：{{ $name }}さん</p>
<p>メールアドレス：{{ $mail }}</p>
<p>---以下メッセージが送信されました---</p>
<p>
    内容 : {{ $naiyou}}
</p>



@endcomponent


  
  
