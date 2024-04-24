@extends('layouts.admin')

@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div id="sidebar">
            @include('admin/partials/side')
        </div>
        <div id="main-content-edit">
            <h1>Test edit page</h1>
            <div class="container p-5">
                <h2>Modify {{$project->name}}</h2>
              <form class="my-5" action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
             
                @csrf
                @method('PUT')
              
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $project->name}}">
                  @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $project->description}}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                    <label for="img_url" class="form-label">Img Url</label>
                    <input type="file" class="form-control @error('img_url') is-invalid @enderror" id="img_url" name="img_url">
                    @error('img_url')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                    <label class="form-check-label" for="">Technologies used</label>
                    @foreach($technologies as $technology)
                    <div class="form-check">
                        
                        
                        <input class="form-check-input" type="checkbox" name="technologies[]" id="technology-{{$technology->id}}"
                        @if($errors->any())

                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}

                        @else 

                        {{ $project->technologies->contains($technology) ? 'checked' : '' }}
                        @endif
                        >

                        <label for="technology-{{$technology->id}}" class="form-check-label">{{$technology->name}}</label>
                      </div>
                      @endforeach
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Type</label>
                    <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                        <option value=""></option>
                        @foreach($types as $type)

                        <option value="{{$type->id}}" {{$type->id == old('type_id', $project->type ? $project->type->id : '')}}>{{$type->name}}</option>
                        @endforeach 
                    </select>
                    @error('type_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                  <label for="url_repo" class="form-label">Url Repo</label>
                  <input type="text" class="form-control @error('url_repo') is-invalid @enderror" id="url_repo" name="url_repo" value="{{ old('url_repo') ?? $project->url_repo}}">
                  @error('url_repo')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
            
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') ?? $project->date}}">
                    @error('date')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                  @enderror
                  </div>
              
              
                <div class="btn-box text-center mt-5">
                <button type="submit" class="btn btn-lg btn-primary">Save Changes</button>
              </div>
              
              </form>
              </div>
        </div>

</div>
</div>

  @endsection