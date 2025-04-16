<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/list.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form2
      </a>
    </div>
  </header>
  
  <main>
    <h1 class="page-tittle">お問い合わせ一覧</h1>
    <a href="/contacts/form">新規登録</a>

    <table class="contact-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メール</th>
            <th>電話</th>
            <th>内容</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>太郎</td>
            <td>a@com</td>
            <td>0123</td>
            <td>そうなの</td>
        </tr>
    </tbody>
    </table>
  </main>
</body>

</html>