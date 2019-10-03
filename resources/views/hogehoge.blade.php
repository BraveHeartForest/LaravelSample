@extends('common.layout')

@section('index')
    @foreach ($hello_array as $hello_word)
        {{ $hello_word}}<br>
    @endforeach
@endsection

