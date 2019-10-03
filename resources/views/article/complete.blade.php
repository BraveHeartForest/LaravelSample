@extends('layout.layout')

@section('content')
<!--Form-->
<form method="post" action="/index">
    {{csrf_field()}}
<!--input type="text" string-->
<h1>完了しました。</h1>



<br><br>
<div class="row">
    <div class="col-sm-12">
        <a href="/index" class="btn btn-primary" style="margin:20px">一覧に戻る</a>
    </div>
</div>
</form>

@stop