<div>
    <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            @php
            $url = url()->current();
            $base = config('app.url');
            @endphp
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($url === 'http://ges.test/ges-admin') active @endif"
                        href="{{ route('dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">WEB SETTINGS</span>
            </h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link  @if($url === 'http://ges.test/ges-admin/navigasi') active @endif"
                        href="{{ route('navigasi') }}">
                        <i class="ni ni-spaceship"></i>
                        <span class="nav-link-text">Navigasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($url === 'http://ges.test/ges-admin/sliders') active @endif"
                        href="{{ route('sliders') }}">
                        <i class="ni ni-image"></i>
                        <span class="nav-link-text">Sliders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($url === 'http://ges.test/ges-admin/static-pages') active @endif"
                        href="{{ route('staticPages') }}">
                        <i class="ni ni-collection"></i>
                        <span class="nav-link-text">Static Pages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($url === 'http://ges.test/ges-admin/products-category') active @endif"
                        href="{{ route('productCategory') }}">
                        <i class="fas fa-box"></i>
                        <span class="nav-link-text">Category Product</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
