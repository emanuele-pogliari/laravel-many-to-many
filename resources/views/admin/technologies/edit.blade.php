@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div id="sidebar">
            @include('admin/partials/side')
        </div>
        <div id="main-content-edit">
            <h1 class="p-5">Test edit type page</h1>
            <div class="container p-5">
                <h2>Modify {{$technology->name}}</h2>
              <form class="my-5" action="{{route('admin.technologies.update', $technology->id)}}" method="POST">
             
                @csrf
                @method('PUT')
              
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $technology->name}}">
                  @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="color" class="form-control" id="color" name="color">{{ old('color') ?? $technology->color}}</textarea>
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