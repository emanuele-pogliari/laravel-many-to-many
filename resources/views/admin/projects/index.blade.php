@extends('layouts.admin')
@section('content')
<div class="container-fluid py-5">
    <div class="row my-row mx-auto">
        <div id="sidebar">
            @include('admin/partials/side')
        </div>
    <div id="main-content-index">
        <h1 class="p-5">Your Projects Page (work in progress)</h2>

    @if($projects->count() == 0)
        <div class="col">
            <h3>NO PROJECT FOUND</h3>
        </div>
      @endif
      <div class="container">
        <table class="table table-hover mb-5">
            <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date Added</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->created_at}}</td>                    <td>
                        <a href="{{route('admin.projects.show', $project->id)}}" class="text-decoration-none">Manage</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
        <div class="text-center">
            <a href="{{route('admin.projects.create')}}"><button class="btn btn-lg btn-primary">Add a Project</button></a>
        </div>
    </div>

    

</div>
</div>
</div>
@endsection