@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div id="sidebar">
            @include('admin/partials/side')
        </div>
        <div id="main-content-edit">
            <h1>Test create type page</h1>
            <div class="container p-5">
                <h2>Add type</h2>
              <form class="my-5" action="{{route('admin.technologies.store')}}" method="POST">
             
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
                    <label for="color" class="form-label">Color</label>
                    <input type="color" class="form-control @error('color') is-invalid @enderror" id="color" name="color"></textarea>
                    @error('color')>
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