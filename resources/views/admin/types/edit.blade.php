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
                <h2>Modify {{$type->name}}</h2>
              <form class="my-5" action="{{route('admin.types.update', $type->id)}}" method="POST" enctype="multipart/form-data">
             
                @csrf
                @method('PUT')
              
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $type->name}}">
                  @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
              
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $type->description}}</textarea>
                    @error('description')
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