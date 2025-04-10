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
    <h1>お問い合わせ一覧</h1>
    <a href="/contacts/form">新規登録</a>
    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メール</th>
            <th>電話</th>
            <th>内容</th>
        </tr>
        <tr>
            <td>1</td>
            <td>太郎</td>
            <td>a@com</td>
            <td>070</td>
            <td>内容内容</td>
        </tr>
        <tr>
            <td>1</td>
            <td>太郎</td>
            <td>a@com</td>
            <td>070</td>
            <td>内容内容</td>
        </tr>
    </table>
  </main>
</body>

</html>