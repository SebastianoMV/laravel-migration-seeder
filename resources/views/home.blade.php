@extends('layout.main')


@section('content')

@foreach($trains as $train)

<div class="card">
  Compagnia: <h5>{{$train->company}}</h5>
  <br>
  Partenza: <h5>{{$train->departure}}</h5>
  <br>
  Arrivo: <h5>{{$train->arrival}}</h5>
</div>

  
@endforeach
@endsection