@extends('layouts.app')
@section('title', 'Регистрация')

@section('content')
    {{-- @include('inc.messages') --}}
    <div class="wrapper-form">
        <h1 class="text-center">Register!</h1>
        <form method="post" action="/register" style="width: 50%">
            @csrf
            {{-- name --}}
            <div class="form-error">
                <label for="name" class="mr-5 mt-5">Name</label>
                <input class="regInput" type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            {{-- username --}}
            <div class="form-error">
                <label for="username" class="mr-5 mt-5">Username</label>
                <input class="regInput" type="text" name="username" id="username" value="{{ old('username') }}" required>
                @error('username')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            {{-- email --}}
            <div class="form-error">
                <label for="email" class="mr-5 mt-5">Email</label>
                <input class="regInput" type="text" name="email" id="email" value="{{old('email')}}" required>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            {{-- password --}}
            <div class="form-error">
                <label for="password" class="mr-5 mt-5">Password</label>
                <input class="regInput" type="password" name="password" id="password" required>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <br><br>

            <button class="btn btn-success btn-submit" type="submit">Submit</button>
        </form>
    </div>
@endsection
