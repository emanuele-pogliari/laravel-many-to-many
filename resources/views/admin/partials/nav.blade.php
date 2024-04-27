<nav class="">
    <div class="container-nav d-flex justify-content-between pt-4 px-4">
        <input class="form-control w-50 rounded rounded-5" type="search" name="" id="" placeholder="Search something...">
        <div class="user-box d-flex gap-3 align-items-center">
            <h4 class="m-0">{{auth()->user()->name}}</h4>
            <img class="img-fluid rounded rounded-4" style="width:50px; height:50px;" src="{{ Vite::asset('resources/img/profile.png') }}" alt="">
            <a class="text-decoration-none text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Admin Page')}}</a>
                <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>