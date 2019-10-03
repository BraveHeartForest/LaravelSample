@extends('layout.layout')

@section('content')

<h1>編集内容確認</h1>

@php var_dump($info);
@endphp
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


<form action="/article/edit_complete" method="post">
{{ csrf_field() }}
<!--hidden -->
<input type="hidden" name="id" value="{{ $info['id'] }}">
<input type="hidden" name="name" value="{{ $info['name'] }}">
<input type="hidden" name="email" value="{{ $info['email'] }}">
<input type="hidden" name="age" value="{{ $info['age'] }}">
<input type="hidden" name="area" value="{{ $info['area'] }}">
<input type="hidden" name="gender" value="{{ $info['gender'] }}">
<input type="hidden" name="media1" value="{{ $info['media1'] }}">
<input type="hidden" name="media2" value="{{ $info['media2'] }}">
<input type="hidden" name="note" value="{{ $info['note'] }}">
<input type="hidden" name="image" value="{{ $info['image'] }}">


<input type="button" onClick='history.back();' class="btn btn-secondary" value="編集画面に戻る">
<input type="submit" class="btn btn-primary" value="編集実行" >
</form>
<a href="/index" class="btn btn-secondary" style="margin:20px">一覧画面に戻る</a>


@stop

