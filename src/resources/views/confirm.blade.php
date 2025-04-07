<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__innner">
        <a class="header__logo" href="/">
            Contact Form2
        </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
        <div class="confirm__heading">
          <h2>お問い合わせ内容確認</h2>
        </div>
        <form class="form">
          <div class="confirm-table">
            <table class="confirm-table__inner">
              <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">
                  <input type="text" name="name" value="サンプルテキスト">
                </td>
              </tr>
              
            </table>
          </div>
        </form>
    </div>
  </main>
</body>
</html>