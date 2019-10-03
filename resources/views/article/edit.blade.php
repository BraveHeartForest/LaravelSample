@extends('layout.layout')

@section('content')
<!--エラーメッセージを表示させる-->
@if(Session::has('media'))
{{--こちらはredirectで一時的にsessionに保存されたメッセージ--}}
<div class="errors">
    <ul>
        <li>
            {{session('media')}}
        </li>
    </ul>
</div>
@endif
@if($errors->any())
<div class="errors">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!--Form-->
<form method="post" action="/article/editconfirm">
    {{csrf_field()}}
<input type="hidden" name="id" value="{{ $info['id'] }}">
<!--input type="text" string-->
<h1>編集</h1>
<div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
    <label>名前</label>
    <input type="text" name="name" class="form-control" value="{{ $info['name'] }}">
    <span class="help-block">{{$errors->first('name')}}</span>
</div>

<!--input type="text" int-->
<div class="form-group  @if(!empty($errors->first('email'))) has-error @endif">
    <label>E-Mail</label>
    <input type="text" name="email" class="form-control" value="{{ $info['email'] }}">
    <span class="help-block">{{$errors->first('email')}}</span>

</div>
<!--input type="text" int-->
<div class="form-group @if(!empty($errors->first('age'))) has-error @endif">
    <label>年齢</label>
    <input type="text" name="age" class="form-control" value="{{ $info['age'] }}">
    <span class="help-block">{{$errors->first('age')}}</span>
</div>
<!--input type="dropmenu" int-->
<div class="form-group  @if(!empty($errors->first('area'))) has-error @endif">
    <label>エリア</label>
    <select name="area" style="height:45px">
        <option value="east" selected>東日本</option>
        <option value="west">西日本</option>
    </select>
</div>
<!--radio-->
<p><b>性別</b></p>
<div class="radio-inline @if(!empty($errors->first('radio'))) has-error @endif">
    <label>
        <input type="radio" name="gender" value="1" <?php if($info['gender'] == '1'){echo 'checked';} ?>>男性
    </label>
</div>
<div class="radio-inline">
    <label>
        <input type="radio" name="gender" value="2" <?php if($info['gender'] == '2'){echo 'checked';} ?>>女性
    </label>
</div>
<!--checkbox-->
<p><b>告知メディア</b></p>
<div class="form-group @if(!empty($errors->first('media1'))) has->error @endif">
    <label>
        <input type="checkbox" name="media1" value="WEB" {{(!$errors->has('*') && $info['media1']== "WEB") || old('media1') == "WEB" ? 'checked' : ''}} >WEB <!--DBの値がvalueに入る。更にその内容次第で、チェックボックスを選択済みに -->
    </label>
    <span class="help-block">{{$errors->first('media1')}}</span>
</div>
<div class="form-group @if(!empty($errors->first('media2'))) has->error @endif">
    <label>
        <input type="checkbox" name="media2" value="TV" {{(!$errors->has('*') && $info['media2']== "TV") || old('media2') == "TV" ? 'checked' : ''}}>TV <!--DBの値がvalueに入る。更にその内容次第で、チェックボックスを選択済みに -->
    </label>
    <span class="help-block">{{$errors->first('media2')}}</span>
</div>


<!--textarea-->
<div class="textarea @if(!empty($errors->first('note'))) has-error @endif">
    <textarea type='text' name="note" cols="30" rows="10" placeholder="ご自由に入力ください。">{{ $info['note'] }}</textarea>
    <span class="help-block">{{$errors->first('note')}}</span>
</div>
<!--image-->
<div class="image @if(!empty($errors->first('image'))) has-error @endif">
    <input type="file" name="image" value="{{$info['image']}}">
    <span class="help-block">{{$errors->first('image')}}</span>
</div>



<br><br>
<a href="/index" class="btn btn-secondary" style="margin:20px">一覧に戻る</a>
<input type="submit" value="確認" class="btn btn-primary">
</form>


@stop