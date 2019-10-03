@extends('layout.layout')

@section('content')

<h1>ログイン結果内容</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/login" class="btn btn-primary" style="margin:20px">フォームに戻る</a>
    </div>
</div>

<!--table-->
<table class="table table-striped">
<tr><td>id</td><td>{{ $id }}</td></tr>
<tr><td>パスワード</td><td>{{ $pass }}</td></tr>
<tr><td>権限</td><td>@if($auth == null)'指定なし'
@elseif($auth == "1")'管理者'
@elseif($auth == "2")'一般'
@endif
</td>
</tr>
</table>


@stop

