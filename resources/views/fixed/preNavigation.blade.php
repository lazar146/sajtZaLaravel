<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top d-flex justify-content-start align-items-center py-2">
                <p class="text-white text-lg-left text-center m-0">Dobrodošli u našu online prodavnicu
                    <i class="fas fa-smile ml-1"></i>
                </p>

            </div>

            <div class="col-lg-8 header-right mt-lg-0 mt-2 d-flex justify-content-end">
                <!-- header lists -->
                <ul class="header-buttons">
                    @if(!session()->has('user'))
                        <li class="text-center text-white">
                            <form method="GET" action="{{ route('loginForm') }}">
                                <button class="btn-header btn-login mr-5" type="submit">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Log In
                                </button>
                            </form>
                        </li>
                        <li class="text-center text-white">
                            <form method="GET" action="{{ route('register') }}">
                                <button class="btn-header btn-register mr-5" type="submit">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Register
                                </button>
                            </form>
                        </li>
                    @endif
                    @if(session()->has('user'))
                            @if(session('user')['role_id'] == 1)
                                <li class="text-center text-white">
                                    <form method="GET" action="{{ route('admin') }}">
                                        @csrf
                                        <button class="btn-header btn-logout ">
                                            <i class="fas fa-database "></i> Admin panel
                                        </button>
                                    </form>
                                </li>
                            @endif
                        <li class="text-center text-white">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn-header btn-logout " type="submit">
                                    <i class="fas fa-sign-out-alt "></i> Odjava
                                </button>
                            </form>
                        </li>
                        <li class="text-center text-white">
                            <form method="GET" action="{{ route('profile') }}">
                                <button class="btn-header btn-profile" type="submit">
                                    <i class="fas fa-female "></i> Profile
                                </button>
                            </form>
                        </li>
                    @endif
                    <li class="text-center text-white">
                        <form method="GET" action="{{ route('cart') }}">
                            <button class="btn-header btn-cart " type="submit" id="listCart">
                                <i class="fas fa-shopping-cart "></i> Korpa
                            </button>
                        </form>
                    </li>
                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>
