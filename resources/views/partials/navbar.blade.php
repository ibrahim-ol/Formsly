<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="container d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
            <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('liberty/images/logo-inverse.svg') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('liberty/images/logo-mini.svg') }}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <form class="search-field ml-auto" action="#">
                <div class="form-group mb-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </form>
            <ul class="navbar-nav navbar-nav-right mr-0">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{ asset('liberty/images/faces/face1.jpg') }}" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </div>

    <div class="nav-bottom">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item @if(Request::path() == 'archive') active @endif">
                    <a href="/archive" class="nav-link"><i class="link-icon fa fa-archive"></i><span class="menu-title">ARCHIVED</span></a>
                </li>
                <li class="nav-item @if(Request::path() == 'home') active @endif">
                    <a href="/home" class="nav-link"><i class="link-icon fa fa-clock-o"></i><span class="menu-title">CURRENT</span></a>
                </li>
                <li class="nav-item @if(Request::path() == 'create') active @endif">
                    <a href="/create" class="nav-link"><i class="link-icon fa fa-plus-circle"></i><span class="menu-title">CREATE</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
