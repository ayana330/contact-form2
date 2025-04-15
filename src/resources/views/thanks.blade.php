@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<div class="thanks__content">
  <div class="thanks__heading">
    <h2>お問い合わせありがとうございます</h2>
  </div>
</div>

    <a href="/">一覧に行く</a><br>
    <a href="/contacts/form">続けて登録</a><br>

@endsection