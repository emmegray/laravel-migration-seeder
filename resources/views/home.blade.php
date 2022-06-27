@extends('layout.main')

@section('content')

<div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom">Trains</h2>

  <div class="row g-4 py-5">
    <ul>
      @foreach ($trains as $train)
      <li>{{$train->id}} - {{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}}</li>
      @endforeach
    </ul>
  </div>

</div>

@endsection