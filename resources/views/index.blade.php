<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/" method="post">
    @csrf
    <h1>氏名</h1>
    <input type="text" name="name">
    <h1>メールアドレス</h1>
    <input type="text" name="email">
    <input type="submit" value="送信する">
  </form>

</body>
</html>