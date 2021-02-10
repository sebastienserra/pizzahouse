@extends('layouts/layout')
@section('content')
        <div class="wrapper pizza-index">
                <div>Pizza Orders</div>
                    @foreach($pizzas as $pizza)
                        <div class="pizza-item">
                                <img src="/img/pizza.png" alt="pizza-icon">
                                <h4>
                                 <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
                                </h4>
                        </div>
                    @endforeach
                </div>
        </div>
@endsection

