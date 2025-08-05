@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services Page</h1>
    <div class="class cards">
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor sit model one.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum dolor sit model two.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum dolor sit tree.')
    @endcomponent
    </div>
@endsection