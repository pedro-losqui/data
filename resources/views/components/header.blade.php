<header id="page-header">
    <div class="content-header">
        <div class="content-header-section">

            <a href="{{ route('home') }}">
                <button type="button" class="btn btn-circle btn-dual-secondary {{ Request::is('home') ? 'active' : '' }}">
                    <i class="fa fa-home"></i>
                </button>
            </a>

            <a href="{{ route('calendar') }}">
                <button type="button" class="btn btn-circle btn-dual-secondary {{ Request::is('calendar') ? 'active' : '' }}">
                    <i class="fa fa-calendar"></i>
                </button>
            </a>

            <a href="{{ route('archive') }}">
                <button type="button" class="btn btn-circle btn-dual-secondary {{ Request::is('archive') ? 'active' : '' }}">
                    <i class="fa fa-archive"></i>
                </button>
            </a>

            <div class="btn-group" role="group">
                <a href="#">
                    <button type="button" class="btn btn-circle btn-dual-secondary">
                        <i class="fa fa-hospital-o"></i>
                    </button>
                </a>
            </div>

            <div class="btn-group" role="group">
                <a href="#">
                    <button type="button" class="btn btn-circle btn-dual-secondary">
                        <i class="fa fa-user"></i>
                    </button>
                </a>
            </div>
        </div>

        <div class="content-header-section">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                    <i class="fa fa-angle-down ml-5"></i>
                </button>
            </div>

            <button type="button" class="btn btn-circle btn-dual-secondary">
                <i class="fa fa-power-off"></i>
            </button>
        </div>
    </div>

    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
</header>
