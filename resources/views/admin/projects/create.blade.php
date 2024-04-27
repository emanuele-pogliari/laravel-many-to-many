@extends('layouts.admin')


@section('content')
<div class="container-fluid py-5">
    <div class="row my-row mx-auto">
        <div id="sidebar">
            @include('admin/partials/side')
        </div>
        <div id="main-content-create">
            <h1 class="p-5">Test edit page</h1>
        <div class="container p-5">
        <h2>Add a Project</h2>
      <form class="my-5" action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
     
        @csrf
      
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}">
          @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>
      
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description')}}</textarea>
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
                
                <input class="form-check-input" 
                       type="checkbox" 
                       name="technologies[]" 
                       id="technology-{{$technology->id}}" 
                       value="{{$technology->id}}"
                        {{in_array($technology->id, old('tags', [])) ? 'checked' : '' }}
                >
                <label for="technology-{{$technology->id}}" class="form-check-label">{{$technology->name}}</label>
              </div>
              @endforeach
            </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Type</label>
            <select class="form-select" name="type_id" id="type_id">
                <option value=""></option>
                @foreach($types as $type)

                <option value="{{$type->id}}" {{$type->id == old('type_id') ? 'selected' : ''}}>{{$type->name}}</option>
                @endforeach 
            </select>
        </div>
    
        <div class="mb-3">
          <label for="url_repo" class="form-label">Url Repo</label>
          <input type="text" class="form-control @error('url_repo') is-invalid @enderror" id="url_repo" name="url_repo" value="{{ old('url_repo')}}">
          @error('url_repo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>
    
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date')}}">
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