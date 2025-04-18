@extends('layouts.app')

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form2</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
  @endsection
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
    @section('content')
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>お問い合わせありがとうございます</h2>
      </div>
    </div>
    @endsection
  </main>
</body>

</html>
