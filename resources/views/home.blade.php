@extends('layouts.app')
@section('title', 'Главная страница')


@section('content')
    @include('inc.messages')
    <h1>Главная страница</h1>
    <a href="{{ route('register') }}"><button class="btn btn-warning">Register</button></a>
@endsection
