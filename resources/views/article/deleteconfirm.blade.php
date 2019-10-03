@extends('layout.layout')

@section('content')

<h1>削除内容確認</h1>


<!--table-->
<table class="table table-striped">
<tr><td>名前</td><td>{{ $info['name'] }}</td></tr>
<tr><td>E-Mail</td><td>{{ $info['email'] }}</td></tr>
<tr><td>年齢</td><td>{{ $info['age'] }}</td></tr>
<tr><td>エリア</td><td>{{ $info['area'] }}</td></tr>
<tr><td>性別</td><td>{{ $info['gender'] }}</td></tr>
<tr><td>メディア1</td><td>{{ $info['media1'] }}</td></tr>
<tr><td>メディア2</td><td>{{ $info['media2'] }}</td></tr>
<tr><td>感想</td><td>{{ $info['note'] }}</td></tr>
<tr><td>ファイル</td><td>{{$info['image']}}
</td>
</tr>
</table>

<p class="">上記データを削除します。よろしいですか？</p>


<!-- <form action="/article/delete_complete" method="post"> -->
<form action="{{ route('article_destroy')}}" method="post">
{{ csrf_field() }}
<!--hidden -->
<input type="hidden" name="id" value="{{ $info['id'] }}">




<a href="/index" class="btn btn-secondary" style="margin:20px">一覧画面に戻る</a>
<input type="submit" class="btn btn-danger" value="削除実行" >
</form>


@stop

