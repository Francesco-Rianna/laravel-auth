@extends('layouts.admin')
@section('content')
<h1 class="text-center">Our Projects</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Slug</th>
        <th scope="col">Nome cliente</th>
        <th scope="col">Testo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->summary}}</td>
                <td><a href="">view</a></td>
            </tr>
        @endforeach
            
    </tbody>
  </table>
@endsection