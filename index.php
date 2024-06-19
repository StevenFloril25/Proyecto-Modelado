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
          <a class="nav-link" href="./cliente.php"><i class="fa-solid fa-user-plus"></i> Registrar Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./paquete.php"><i class="fa-solid fa-box-open"></i> Registrar Paquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-list-alt"></i> Registrar Proveedor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero-section">
  <div class="container">
    <h1 class="animate__animated animate__fadeInDown">Bienvenidos a Gestión de Eventos     </h1>
    <p class="animate__animated animate__fadeInUp">Creamos eventos inolvidables para ti</p>
  </div>
</div>

<div class="container services" >
  <div class="row">
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <img src="img/evento.jpg" class="card-img-top" alt="Imagen de Organización de Eventos">
        <div class="card-body">
          <h5 class="card-title">Eventos</h5>
          <p class="card-text">Desde bodas hasta conferencias, lo organizamos todo.</p>
          <p class="card-text">Nuestro equipo se encarga de todos los detalles, desde la planificación inicial hasta la ejecución el día del evento. Nos aseguramos de que todo salga perfecto para que puedas disfrutar de tu día especial sin preocupaciones.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <img src="img/decoracion.jpg" class="card-img-top" alt="Imagen de Decoración">
        <div class="card-body">
          <h5 class="card-title">Decoración</h5>
          <p class="card-text">Decoraciones temáticas que impresionarán a tus invitados.</p>
          <p class="card-text">Ofrecemos una amplia gama de opciones de decoración para adaptarse a cualquier tema o estilo. Desde elegantes bodas hasta coloridas fiestas temáticas, nuestros diseñadores crearán un ambiente inolvidable.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card animate__animated animate__zoomIn">
        <img src="img/catering.jpg" class="card-img-top" alt="Imagen de Catering">
        <div class="card-body">
          <h5 class="card-title">Catering</h5>
          <p class="card-text">Deliciosas opciones de catering para cualquier tipo de evento.</p>
          <p class="card-text">Nuestro servicio de catering ofrece una variedad de menús personalizados para satisfacer todos los gustos y necesidades dietéticas. Desde aperitivos hasta platos principales y postres, garantizamos una experiencia culinaria de alta calidad.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="footer">
  <div class="container">
    <div class="d-flex justify-content-center mt-1">
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/twitter.png"
          alt="Twitter" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img
          src="img/facebook.png" alt="Facebook" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img
          src="img/linkedin.png" alt="LinkedIn" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social" href="#"><img src="img/instagram.png"
          alt="Instagram" class="social-icon"></a>
    </div>
    <a class="mt-4">© 2024 Gestión de Eventos     . Todos los derechos reservados.</>
  </div>
</footer>

<?php include 'script.php'; ?>