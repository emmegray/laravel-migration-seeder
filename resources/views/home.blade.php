@extends('layout.main')

@section('content')

<div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom">🚂 Treni</h2>

  <div class="row g-4 py-5">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Codice Treno:</th>
          <th scope="col">Stazione di Partenza:</th>
          <th scope="col">Stazione di Arrivo:</th>
          <th scope="col">Orario di arrivo:</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
        <tr>
          <th scope="row">{{$train->codice_treno}}</th>
          <td>{{$train->stazione_di_partenza}}</td>
          <td>{{$train->stazione_di_arrivo}}</td>
          <td>{{$train->orario_di_arrivo}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

</div>

@endsection