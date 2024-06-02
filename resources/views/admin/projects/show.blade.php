@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Nome del progetto : {{$project->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary"> Nome del cliente : {{$project->client_name}}</h6>
      <p class="card-text"> Descrizione progetto : {{$project->summary}}</p>
      <div>{{$project->slug}}</div>
    </div>
</div>
@endsection