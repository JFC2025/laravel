<header>
    <h2 class="text-center my-3">Bienvenido a mi Blog</h2>

    <!-- Barra de navegación en negro -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Marca del blog -->
            <a class="navbar-brand text-white" href="{{ route('home') }}">Mi Blog Personal</a>

            <!-- Botón colapsable para móvil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-white">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
