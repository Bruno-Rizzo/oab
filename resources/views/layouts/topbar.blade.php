<header id="page-topbar">

    <div class="navbar-header">

        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo_livro_pp_light.png')}}" alt="logo-light" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="ri-menu-2-line align-middle"></i>
            </button>


        </div>

        <div class="d-flex">


            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/profile.png')}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('profile.index')}}"><i class="ri-user-line align-middle me-1"></i> Perfil</a>
                    <a class="dropdown-item" href="{{route('profile.password')}}"><i class="ri-lock-unlock-line align-middle me-1"></i> Aletrar Senha</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <a class="dropdown-item text-danger" href="" onclick="event.preventDefault();this.closest('form').submit();">
                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
