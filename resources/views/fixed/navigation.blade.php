<!-- navigation -->
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/"><img style="width: 120px;border-radius: 10px" src="{{asset('assets/images/logoStranice.jpg')}}"></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @foreach($menu as $link)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route($link['route'])}}">{{$link['name']}}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>


        </nav>
    </div>
</div>
<!-- //navigation -->
