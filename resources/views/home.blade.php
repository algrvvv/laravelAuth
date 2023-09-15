@extends('layouts.app')
@section('title', 'Главная страница')


@section('content')
    @include('inc.messages')
    <h1>Главная страница</h1>
    <a href="{{ route('register') }}">
        <button class='glowing-btn'><span class='glowing-txt'>C<span class='faulty-letter'>L</span>ICK</span></button>
    </a>
@endsection
