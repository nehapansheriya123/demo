<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href=""><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
        @guest
            <li>
                <a  class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{route('register')}}" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{route('login')}}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
            @else    
            <li>
                    <a href="{{route('post.index')}}" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i> Manage Gigs</a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
        </ul>
    </nav>
    @yield('content')

    <!-- Hero -->
   
    @include('partials.footer')
   
</body>

</html>