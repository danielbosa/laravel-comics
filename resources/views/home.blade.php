@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>I nostri prodotti</h1>
    <ul>
    @foreach ( $comics as $comic)
        <li>{{$comic['title']}}</li>

    @endforeach
    </ul>
</section>

@endsection
