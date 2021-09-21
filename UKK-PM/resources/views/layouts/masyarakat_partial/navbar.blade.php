<nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
    <div class="container mt-4">
        <a class="navbar-brand me-3" href="{{ route('index') }}">
            <h1 style="margin-left: -20px;"><b style="font-family: 'Acme', sans-serif; color: yellow">ngadU</b>!</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                <li class="nav-item me-4">
                    <a class="nav-link " aria-current="page" href="{{route('proses.pengaduan')}}">Home</a>
                </li>

                @guest

                @else
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{route('history.pengaduan',$user->id)}}">History Pengaduan</a>
                    </li>
                @endguest   
                <li class="nav-item me-4">
                    <a class="nav-link" href="#about">About me</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <!-- <a href="#" class="btn btn-transparant me-3 text-white">Log in</a> -->
            @guest
                @if ('www.ngadu!.com' === request()->path())
                     <a href="{{ route('login') }}" class="btn text-white" style="background-color: #3490dc">Log in </a>
                        
                @else

                @endif
            @else
                    <a class="text-white">{{ $user->nama }} | &nbsp;</a>
                    <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

            @endguest
            
        </div>
    </div>
</nav>
