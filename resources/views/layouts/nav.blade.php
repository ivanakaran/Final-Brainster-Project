<nav class="navbar  navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="hackr-logo-text-path" src="https://hackr.io/assets/images/programming-images/logo-new.svg"
                alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <span class="">
                            <img class="nav-icon " src="https://hackr.io/assets/images/nav-icons/programming.svg"
                                alt="Programming">
                            Programming
                        </span>
                    </a>
                </li>

                <li class="nav-item {{ Request::path() == 'data-science' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('data-science') }}">
                        <span class="">
                            <img class="nav-icon " src="https://hackr.io/sites/data-science/icon?ver=1571096418"
                                alt="Data Science">
                            Data Science
                        </span>
                    </a>
                </li>

                <li class="nav-item {{ Request::path() == 'devops' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dev-ops') }}">
                        <img class="nav-icon " src="https://hackr.io/sites/devops/icon?ver=1576396835" alt="DevOps">
                        DevOps
                        </span>
                    </a>
                </li>

                <li class="nav-item {{ Request::path() == 'design' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('design') }}">
                        <span class="">
                            <img class="nav-icon " src="https://hackr.io/sites/design/icon?ver=1571096431" alt="Design">
                            Design
                        </span>
                    </a>
                </li>
               
            </ul>

           

            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-3 mt-3">
                <li class="nav-item dropdown">
                    <form class=" nav-search my-3 my-lg-0 " method = "GET">
                        @csrf
                        <div class="form-group has-search">
                            <span class="fa fa-search  form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search for topics" name="category_name" id="category_name">
                           <div id="categoryList"></div>
                        </div>
                    </form>
                </li>
                
                <li class=" nav-item submit-tutorial  ml-2">
                    @guest
                        <a href="#" class="btn btn-sm addTutorial" data-toggle="modal" data-target="#registerTutorialModal">
                        @endguest
                        @auth
                            <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#tutorialModal">
                            @endauth
    
                            <i class="fas fa-plus"></i>
                            Submit a tutorial</a>
                            </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown" style="bottom: 10px">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(Auth::user()->image)
                                <img alt="{{ Auth::user()->name }}" src="{{ Auth::user()->image }}" width="30px" />
                                @else
                                <img alt="{{ Auth::user()->name }}" src="{{ Gravatar::src(Auth::user()->email) }}" width="30px" />
                               @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                                                                                                                                                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-sm sign-up-in" data-toggle="modal" data-target="#registerModal"
                                href="">{{ __('Sign Up/ Sign In') }}</a>
                        </li>
                    @endauth
                @endif


            </ul>
        </div>
    </div>

    {{-- Modals --}}

    @include('modals.register-modal')

    @include('modals.register-tutorial')
    @include('modals.login-modal')

    @include('modals.pass-modal')

    @include('modals.submit-tutorial')

    @section('scripts')

    @endsection
