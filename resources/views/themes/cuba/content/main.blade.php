@extends('themes.cuba.layouts.app')


@section('content')


    <h2 class="theme-text">{{$page->title}}</h2>


    <div class="main-text">
        {!! $page->text !!}
    </div>


@endsection