<?php include 'header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Gestión de Eventos Zorrito Rayado</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./evento.php"><i class="fa-regular fa-calendar-plus"></i> Agregar Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-user-plus"></i> Registrar Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-box-open"></i> Registrar Paquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-list-alt"></i> Registrar Tipo de Evento</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero-section">
  <div class="container">
    <h1 class="animate__animated animate__fadeInDown">Bienvenidos a Gestión de Eventos Zorrito Rayado</h1>
    <p class="animate__animated animate__fadeInUp">Creamos eventos inolvidables para ti</p>
  </div>
</div>

<div class="container services">
  <div class="row">
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <div class="card-body">
          <h5 class="card-title">Organización de Eventos</h5>
          <p class="card-text">Desde bodas hasta conferencias, lo organizamos todo.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <div class="card-body">
          <h5 class="card-title">Decoración</h5>
          <p class="card-text">Decoraciones temáticas que impresionarán a tus invitados.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <div class="card-body">
          <h5 class="card-title">Catering</h5>
          <p class="card-text">Deliciosas opciones de catering para cualquier tipo de evento.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'script.php'; ?>
