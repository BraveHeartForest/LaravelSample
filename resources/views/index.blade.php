@extends('layout.layout')

@section('content')

<div class="container">
<form action="article" method="get">
    <input type="submit" value="新規登録" class="btn btn-primary float-right">
</form>
</div>
<div class="container mt-5">
<table border ="1" class="table table-striped">
<tr class="table-success">
    <th>id</th><th>名前</th><th>メールアドレス</th><th>年齢</th><th>エリア</th><th>性別</th><th>メディア１</th><th>メディア２</th><th>感想</th><th>ファイル</th><th>編集</th><th>削除</th>
</tr>
@foreach($alldata as $all)

{{csrf_field()}}
<tr>
<td>{{$all['id']}}</td
><td>{{$all['name']}}</td>
<td>{{$all['email']}}</td>
<td>{{$all['age']}}</td>
<td><?=$all['area'] == 'east' ? '東日本' : '西日本' ?></td>
<td><?=$all['gender'] == '1' ? '男性' : '女性' ?></td>
<td>{{$all['media1']}}</td>
<td>{{$all['media2']}}</td>
<td>{{$all['note']}}</td>
<td>{{$all['image']}}</td>
<td><a href="/article/edit/{{$all['id']}}" class="btn btn-success">編集</td>
<td><a href="/article/deleteconfirm/{{$all['id']}}" class="btn btn-danger">削除</td>
</tr>

@endforeach

</table>
</div>





@endsection
