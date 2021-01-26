<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Dự Án</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @foreach(config('nav') as $item)
                <li class="nav-item {{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route($item['route']) }}">{{ $item['name'] }}</a>
                </li>
            @endforeach
        </ul>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="" style="width: 40px;height: 40px;border-radius: 50%">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item" href="{{ route('get.update.profile', get_data_user('admins')) }}">Cập nhật thông tin</a>
                    <a class="dropdown-item" href="{{ route('get.import_data') }}">Import Data</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('get.logout') }}">Thoát</a>
                </div>
            </li>
        </ul>

{{--        <form class="form-inline my-2 my-lg-0">--}}
{{--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--        </form>--}}
    </div>
</nav>
