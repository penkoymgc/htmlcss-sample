<!DOCTYPE html>
<html lang="ja">
<style>
body {
  background-color: #fffacd;
}
h1 {
  font-size: 16px;
  color: #ff6666;
}
#button {
  width: 200px;
  text-align: center;
}
#button a {
  padding: 10px 20px;
  display: block;
  border: 1px solid #2a88bd;
  background-color: #FFFFFF;
  color: #2a88bd;
  text-decoration: none;
  box-shadow: 2px 2px 3px #f5deb3;
}
#button a:hover {
  background-color: #2a88bd;
  color: #FFFFFF;
}
</style>
<body>
  <p>SNAPPERSへのお問い合わせがとどきました。
  </p>

<p>
お名前：{{ $name }}<br>
メールアドレス：{{ $email }}<br>
お電話番号：{{ $tel }}<br>
お問い合わせ種別：{{ $type }}<br>
ご希望のご連絡方法：{{ $contact }}<br>
メッセージ：{{ $message }}<br>
</p>

</body>
</html>