<nav class="">
    <div class="container-nav d-flex justify-content-between pt-4 px-4">
        <input class="form-control w-50 rounded rounded-5" type="search" name="" id="" placeholder="Search something...">
        <div class="user-box d-flex gap-3 align-items-center">
            <h4 class="m-0">{{auth()->user()->name}}</h4>
            <img class="img-fluid rounded rounded-4" style="width:50px; height:50px;" src="{{ Vite::asset('resources/img/profile.png') }}" alt="">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
    </div>
</nav>