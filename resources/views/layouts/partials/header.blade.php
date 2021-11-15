<header>
    <nav>
        <ul>
            <ol><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Pagina principal</a></ol>
            <ol><a href="{{ route('usuarios.index') }}"
                    class="{{ request()->routeIs('usuarios.*') ? 'active' : '' }}">Pagina Usuario</a></ol>
            <ol><a href="{{ route('inventarios.index') }}"
                    class="{{ request()->routeIs('inventarios.*') ? 'active' : '' }}">Pagina inventario</a></ol>
            <ol><a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a></ol>
            <ol><a href="{{ route('contactanos.index') }}"
                    class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contactanos</a></ol>
        </ul>
    </nav>
</header>
