
<div class="card plato-card shadow-lg border-0 rounded-4 overflow-hidden mb-4 transition mx-auto" style="background-color: #fdfdfd; width:70%;">
  <div class="row g-0 align-items-center">

    <!-- Columna de texto -->
    <div class="col-md-6 p-4">
      <h5 class="card-title text-primary fw-bold fs-4">{{ $nombre }}</h5>
      <p class="card-text text-dark fw-medium mb-3" style="font-size: 0.95rem;">{{ $descripcion }}</p>
      <p class="card-text text-success fw-semibold fs-5">{{ $precio }} €</p>
    </div>

    <!-- Columna de imagen con tamaño fijo uniforme -->
    <div class="col-md-6 text-end d-flex justify-content-center align-items-center p-3">
      <img src="{{ $image }}" alt="{{ $nombre }}" style="width: 200px; height: 200px; object-fit: cover;" class="rounded-3 shadow-sm">
    </div>

  </div>
</div>
