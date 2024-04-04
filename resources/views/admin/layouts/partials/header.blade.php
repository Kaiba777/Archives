<!-- Header Area -->
<header class="header" >
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="{{ route('archives.index') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="#">Archives</a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ request()->routeIs('archives.index') ? 'active' : '' }}"><a href="{{ route('archives.index') }}">Acceuil</a>
                                    </li>
                                    <li class="{{ request()->routeIs('archives.laravel') ? 'active' : '' }}"><a href="{{ route('archives.laravel') }}">Laravel</a></li>
                                    <li class="{{ request()->routeIs('archives.livewire') ? 'active' : '' }}"><a href="{{ route('archives.livewire') }}">Livewire</a></li>
                                    <li class="{{ request()->routeIs('archives.javascript') ? 'active' : '' }}"><a href="{{ route('archives.javascript') }}">Javascript</a></li>
                                    <li class="{{ request()->routeIs('archives.html') ? 'active' : '' }}"><a href="{{ route('archives.html') }}">HTML</a></li>
                                    <li class="{{ request()->routeIs('archives.css') ? 'active' : '' }}"><a href="{{ route('archives.css') }}">CSS</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.html" class="btn">Bienvenue User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->