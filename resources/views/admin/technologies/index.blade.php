@extends('layouts.admin')
@section('content')


<div class="container-fluid">
  <div class="row">
      <div id="sidebar">
          @include('admin/partials/side')
      </div>
      <div id="main-content-edit">
        <h1 class="p-5">Index Technology View</h1>

<div class="container">
    <table class="table table-hover mb-5">
        <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Name</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($technologies as $technology)
            <tr>
                <th scope="row">{{$technology->id}}</th>
                <td>{{$technology->name}}</td>
                <td><a href="{{route('admin.technologies.show', $technology->id)}}" class="text-decoration-none">Manage</a></td>
            </tr>
            @endforeach
          </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('admin.technologies.create')}}"><button class="btn btn-lg btn-primary">Add a Technologies</button></a>
    </div>
</div>
      </div>
      </div>
      </div>
@endsection