<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category',[$category->id])}}">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>
                @if(Auth::user())
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('whistlist.index')}}">Whistlist <span class="badge bg-danger text-white">{{$whistlist}}</span></h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile')}}">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <button class="nav-link btn btn-danger text-white">Log out</button>
                        </form>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>
</div>