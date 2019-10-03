@extends('layout.layout')

@section('content')

<h1>入力内容確認</h1>


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

<form action="/article/complete" method="post">
{{ csrf_field() }}
<!--hidden -->
<input type="hidden" name="name" value="{{ $info['name'] }}">
<input type="hidden" name="email" value="{{ $info['email'] }}">
<input type="hidden" name="age" value="{{ $info['age'] }}">
<input type="hidden" name="area" value="{{ $info['area'] }}">
<input type="hidden" name="gender" value="{{ $info['gender'] }}">
<input type="hidden" name="media1" value="{{ $info['media1'] }}">
<input type="hidden" name="media2" value="{{ $info['media2'] }}">
<input type="hidden" name="note" value="{{ $info['note'] }}">
<input type="hidden" name="image" value="{{ $info['image'] }}">



<a href="/article" class="btn btn-secondary" style="margin:20px">フォームに戻る</a>
<input type="submit" value="登録実行" class="btn btn-primary">
</form>


@stop

