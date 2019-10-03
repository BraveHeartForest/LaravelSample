@extends('layout.layout')



@section('content')
<!-- エラーメッセージを表示させる-->
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
<form method="post" action="/login">
    {{csrf_field()}}
<!--input type="text" string-->
<div class="form-group @if(!empty($errors->first('loginid'))) has-error @endif">
    <label>ID</label>
    <input type="text" name="loginid" value="{{old('loginid')}}" class="form-control">
    <span class="help-block">{{$errors->first('loginid')}}</span>
</div>
<!-- <div class="form-group">
    <label>ID</label>
    <input type="text" name="loginid" class="form-control">
</div> -->
<!--input type="text" int-->
<div class="form-group @if(!empty($errors->first('loginid'))) has-error @endif">
    <label>パスワード</label>
    <input type="password" name="loginpassword" value="{{old('loginpassword')}}" class="form-control">
    <span class="help-block">{{$errors->first('loginpassword')}}</span>
</div>
<!--radio-->
<p><b>権限</b></p>
<div class="radio-inline">
    <label>
        <input type="radio" name="authority" value="1">管理者
    </label>
</div>
<div class="radio-inline">
    <label>
        <input type="radio" name="authority" value="2">一般
    </label>
</div>
    <span class="help-block">{{$errors->first('authority')}}</span>
<br><br>
<input type="submit" value="ログイン" class="btn btn-primary">
</form>

@stop