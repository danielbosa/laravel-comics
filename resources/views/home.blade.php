@extends('layouts.app')
{{-- vuol dire che estendo il layout app e ci metto dentro info che voglio al posto dei placeholder;
    in questo caso ho due placeholder: 1. Title; 2. Content.
    Il layout app si presenta già con header, jumbotron e footer; nel main ha spazio, tramite placeholder "content" di ospitare contenuti diversi; ma il layout è sempre quello!
--}}

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
