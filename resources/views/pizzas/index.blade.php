@extends('layouts/layout')
@section('content')
        <section>
                <div>Pizza List</div>
                    @foreach($pizzas as $pizza)
                         <div>{{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}</div>
                    @endforeach
                </div>
        </section>
@endsection

