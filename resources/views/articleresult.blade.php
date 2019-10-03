@extends('layout.layout')

@section('content')

<h1>内容表示</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/article" class="btn btn-primary" style="margin:20px">フォームに戻る</a>
    </div>
</div>

<!--table-->
<table class="table table-striped">
<tr><td>名前</td><td>{{ $info['name'] }}</td></tr>
<tr><td>E-Mail</td><td>{{ $info['email'] }}</td></tr>
<tr><td>年齢</td><td>{{ $info['age'] }}</td></tr>
<tr><td>エリア</td><td>{{ $info['area'] }}</td></tr>
<tr><td>性別</td><td>{{ $info['gender'] }}</td></tr>
<tr><td>メディア</td><td>{{ $info['media1'] }}</td></tr>
<tr><td>メディア</td><td>{{ $info['media2'] }}</td></tr>
<tr><td>感想</td><td>{{ $info['comment'] }}</td></tr>
<tr><td>ファイル</td><td>{{$info['image']}}
</td>
</tr>
</table>


@stop

