@extends('layouts/layout')
@section('content')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
        <section>
        <div class="restaurant-name">Pizza House</div>
        <img src="/img/pizza.jpg" alt="pizza" class="head">
        <div class="title">The best pizzas ever !</div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
        </section>
@endsection
