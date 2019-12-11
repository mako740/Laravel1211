@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection


<!-- 3-32 -->
<!-- @section('content')
    <p>ここが本文のコンテンツです。</p>
    <ul>
    @each('components.item', $data, 'item')
    </ul>
@endsection -->

<!-- 3-33
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    @include('components.message', ['msg_title'=>'OK',
    'msg_content'=>'サブビューです。'])

@endsection -->

<!-- @section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot

    @endcomponent

@endsection -->


