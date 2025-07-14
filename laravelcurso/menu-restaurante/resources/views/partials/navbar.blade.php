<nav class="navbar navbar-expand-lg" style="background-color: #000000;">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="#">Restaurante Francis</a>

    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold px-3" href="{{ route('menu') }}">Menú</a>
        </li>
        <li class="nav-item">
          <!-- Botón que activa el modal -->
          <a class="nav-link text-white fw-semibold px-3" href="#" data-bs-toggle="modal" data-bs-target="#modalCarta">Carta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
