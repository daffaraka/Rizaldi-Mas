
 <style>
   .nav-item a {
  display: inline-block;
  text-decoration: none;
  transition: all 0.4s ease;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
}
   </style>
   <!-- Start Header Area -->
    <header class="header navbar-area" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg align-center" style="text-decoration:none;">
                            <li class="nav-item text-white btn btn-light rounded-pill button ">
                               <a href="/user"><img src="{{ asset('assets/img/logo/logo.png') }}" width="34" alt=""></a>
                                {{-- <a href="contact.html" aria-label="Toggle navigation">SILAMAS</a> --}}
                            </li>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/user" class="active" aria-label="Toggle navigation">
                                            Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/statistik" aria-label="Toggle navigation">
                                            &nbsp;Statistik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('leaderboard') }}" aria-label="Toggle navigation">
                                            &nbsp;Leaderboard</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <style>
                              .nav-item.dropdown{
                                list-style-type: none !important;
                              }
                            </style>
                            @auth
                            <span> <img class="object-cover rounded-pill" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name }}"
                                alt="" aria-hidden="true" width="42" height="42" /></span>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle mx-3 bg-light text-primary p-2 rounded" href="#"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hello, {{ auth()->user()->name }}
                                    </a>
                                    <li class="nav-item dropdown" style="list-style:none !improtant;">
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style:none !improtant;">
                                            <li><a class="dropdown-item text-primary" href="{{ route('profile') }}"><i class="bi bi-gear-fill text-primary"></i> My Profile</a></li>
                                            <li><a class="dropdown-item text-primary" href="{{ route('dashboard') }}"><i class="bi bi-gear-fill text-primary"></i> Dashboards</a></li>

                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form action="/logout" method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-bg-danger"><i class="bi bi-box-arrow-right text-warning"></i> Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                    @else
                            <div class="col-md-3 text-end">
                                <a href="/login"><button type="button" class="btn btn-outline-danger me-2">Login</button></a>
                                <a href="/register"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
                            </div>
                            @endauth
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

