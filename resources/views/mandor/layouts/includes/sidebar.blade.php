<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">Your Land</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">YL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            {{--<li class="nav-item dropdown">--}}
                {{--<a href="{{ route('mandor.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>--}}
            {{--</li>--}}
            <li class="nav-item dropdown">
                <a href="{{ route('mandor.land.index')  }}" class="nav-link"><i class="fas fa-home"></i><span>Pengukuran Tanah</span></a>
            </li>
        </ul>
    </aside>
</div>