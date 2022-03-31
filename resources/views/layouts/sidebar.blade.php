<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Navigation</li>
            {{-- <li><a href="{{ route('admin.index') }}"><i class="fa fa-user"></i> <span>User</span></a></li> --}}
            @if (Auth::user()->role == 'admin')
                <li><a href="{{ route('kelurahan.index') }}"><i class="fa fa-user"></i> <span>Kelurahan</span></a>
                </li>
            @else
                <li><a href="{{ route('pasien.index') }}"><i class="fa fa-user"></i> <span>Pasien</span></a></li>
            @endif
        </ul>
    </section>
</aside>
