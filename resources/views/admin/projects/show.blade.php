@extends('layouts.admin')


@section('content')
    
    <div class="container-fluid">

        <div class="row">
          <div id="sidebar">
            @include('admin/partials/side')
          </div>
          
          <div id="main-content-show">
            <h1 class="p-5">Test Show Page (work in progress)</h1>
            <a href="{{route('admin.projects.index')}}" class="p-5">Back to index</a>
            <div class="container">
            
              <div class="row justify-content-center ">
              <div class="card w-50">
                <img class="img_prj img-fluid" src="{{asset('storage/' . $project->img_url)}}" alt="">
                <div class="card-body">
                  <h3 class="title">Name: {{$project->name}}</h3>
                  <p class="desc fs-4">Description: {{$project->description}}</p>
                  <div>
                    <span>Used tech:</span>
                    @foreach($project->technologies as $technology)
                        <span>{{$technology->name}}</span>
                    @endforeach
                  </div>
                  <p>{{$project->type?->name}}</p>
                  <a class="link-repo fs-4" href="{{$project->url_repo}}">Link Repo</a>
                  <p class="date fs-4">Pubblication Date: {{$project->date}}</p>
                  <a href="{{route('admin.projects.edit', $project->id)}}"><button class="btn btn-lg btn-primary">Edit</button></a>

            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
        
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Project</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
        
                    <div class="modal-body">
                      Are you sure to delete {{$project->name}}
                    </div>
        
                    <div class="modal-footer">
        
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            
                            <button class="btn btn-danger">Delete</button>
                        </form>
        
                    </div>
        
                  </div>
                </div>
            </div>

            <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>
  </div>
@endsection