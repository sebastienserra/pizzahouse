@extends('layouts/layout')
@section('content')
        <section>
        <div class="restaurant-name">Pizza House</div>
        <img src="/img/pizza.jpg" alt="pizza" class="head">
        <div class="title">The best pizzas ever !</div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
        </section>
@endsection
