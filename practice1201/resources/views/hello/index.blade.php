@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

<!-- 3-37 -->
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
