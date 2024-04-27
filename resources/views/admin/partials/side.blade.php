<div class=" my-content-side p-2 d-flex flex-column justify-content-between text-center">
    {{-- <button class="position-absolute">Resize</button> --}}
    <div>
        <h2>Dev-Branch (WIP)</h2>
        <div class="panel-name my-3 py-4">
            <h2 class="m-0 fs-3 ">LOGO</h2>
        </div>
    
    
    <ul class="list-unstyled d-flex flex-column gap-4 ">
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/') }}">{{ __('Home') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/admin') }}">{{ __('Dashboard') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/admin/projects') }}">{{ __('Projects') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/') }}">{{ __('Messages') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/profile') }}">{{ __('Profile') }}</a></li>
        <li class="fs-4 p-2"><a class="text-decoration-none text-white" href="{{url('/') }}">{{ __('Settings') }}</a></li>
    </ul>
</div>
    <div class="profile-opt d-flex flex-column gap-4 mb-3">
        {{-- <div class="usr-box d-flex align-items-center gap-4 py-4">
            <img src="{{ Vite::asset('resources/img/profile.png') }}" alt="">
            <h3 class="m-0">{{auth()->user()->name}}</h3>
        </div> --}}
        <ul class="list-unstyled">
            <li class="fs-4 p-2">Logout</li>
        </ul>
    </div>
</div>