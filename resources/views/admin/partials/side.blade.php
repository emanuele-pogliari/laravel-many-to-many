<div class=" my-content-side p-2 d-flex flex-column justify-content-between">
    {{-- <button class="position-absolute">Resize</button> --}}
    <div>
        <div class="panel-name d-flex align-items-center gap-3 my-3 py-4">
            <i class="fa fs-1 fa-gear"></i>
            <h2 class="m-0 fs-3 ">Admin Panel</h2>
        </div>
        <p class="text-center text-danger fw-bold">This is a mock-up</p>
    
    <div class="search my-4">
        <div class="input-group">
            <input class="form-control border-end-0 border" type="search" placeholder="Search something" id="example-search-input">
            <span class="input-group-append">
                    <i class="fa fa-search"></i>                
            </span>
        </div>
      </div>
    <ul class="list-unstyled">
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/') }}">{{ __('Home') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="#"></a>Placeholder 1</li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="#"></a>Placeholder 2</li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="#"></a>Placeholder 3</li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="#"></a>Placeholder 4</li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="#"></a>Placeholder 5</li>
    </ul>
</div>
<p class="text-center text-danger fw-bold">This is a mock-up</p>
    <div class="profile-opt d-flex flex-column gap-4 mb-3">
        <div class="usr-box d-flex align-items-center gap-4 py-4">
            <img src="{{ Vite::asset('resources/img/profile.png') }}" alt="">
            <h3 class="m-0">{{auth()->user()->name}}</h3>
        </div>
        <ul class="list-unstyled">
            <li class="fs-4 p-2">Profile</li>
            <li class="fs-4 p-2">Dashboard</li>
            <li class="fs-4 p-2">Logout</li>
        </ul>
    </div>
</div>