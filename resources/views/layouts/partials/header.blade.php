<div class="container-fluid"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Maipo Grande</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('usuarios.index') }}"
                        class="nav-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }}">Pagina Usuario</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inventarios.index') }}"
                        class="nav-link {{ request()->routeIs('inventarios.*') ? 'active' : '' }}">Pagina inventario</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('productos.index') }}"
                        class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }}">Pagina producto</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}"
                        class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}">Pagina roles</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nosotros') }}"
                        class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('contactanos.index') }}"
                        class="nav-link {{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
