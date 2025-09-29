@extends('test.app')

@section('title', 'Demo Template - Home')

@section('content')
  <h1>Kopi apa yang suka cubit?</h1>
  <p>KOPITING</p>

  <div class="sub-content">
        @yield('home-content')
    </div>

@endsection
