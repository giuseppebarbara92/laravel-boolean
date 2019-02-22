@extends('layouts.app')

<!-- METODO UTILIZZATO PER INSERIRE IL TITOLO -->
@section('title')
Questo è il mio title
@endsection

@section('content')
<div class="home">
  <div class="section_1">
    <div class="container">
      <div class="row">
        <div class="col-6 section_1_left">
          <h1>Diventa <br> sviluppatore web</h1>
          <p>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore</p>
          <a href="#" class="btn btn-primary">scopri il corso</a>
        </div>
        <div class="col-6 section_1_right">
          <img src="{{ asset('img/mac2x.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
