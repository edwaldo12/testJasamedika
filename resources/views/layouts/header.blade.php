<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('admin.png') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu" style="width:162px">
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <form action="{{ route('admin.show', ['admin' => Auth()->user()->id]) }}"
                                    method="GET">
                                    @csrf
                                    <button class="btn btn-info btn-flat" style="width: 100%">Edit</button>
                                </form>
                            </div>
                            <div class="pull-right">
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-flat" style="width: 100%">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
