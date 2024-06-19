<?php include 'header.php'; ?>

<style>
  body {
    background-color: #ffffff;
    /* Fondo blanco */
    color: #2c3e50;
    /* Color de texto gris oscuro */
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
  }

  .navbar-custom {
    background-color: #1abc9c;
    /* Verde esmeralda oscuro */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
  }

  .navbar-brand-custom {
    color: #ffffff;
    /* Blanco */
    font-weight: bold;
    font-size: 1.5rem;
  }

  .navbar-brand-custom:hover {
    color: #ecf0f1;
    /* Gris muy claro */
  }

  .navbar-nav .nav-link {
    color: #ecf0f1;
    /* Blanco */
    margin-right: 15px;
  }

  .navbar-nav .nav-link:hover {
    color: #f39c10;
    /* Dorado */
  }

  .hero-section {
    background: #16a085;
    /* Verde esmeralda más claro */
    color: white;
    padding: 100px 0;
    text-align: center;
  }

  .hero-section h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .hero-section p {
    font-size: 1.5rem;
  }

  .services {
    padding: 60px 0;
  }

  .services .card {
    border: none;
    background-color: #ffffff;
    /* Blanco */
    color: #2c3e50;
    /* Gris oscuro */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    height: 100%;
  }

  .services .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .services .card img {
    height: 200px;
    object-fit: cover;
  }

  .services .card-title {
    font-weight: bold;
    margin-bottom: 15px;
    color: #16a085;
    /* Verde esmeralda */
  }

  .services .card-text {
    font-size: 1rem;
  }

  .footer {
    background-color: #1abc9c;
    /* Verde esmeralda oscuro */
    color: #ffffff;
    /* Blanco */
    padding: 20px 0;
    text-align: center;
  }

  .footer a {
    color: #ecf0f1;
    /* Gris muy claro */
    text-decoration: none;
  }

  .footer a:hover {
    color: #f39c10;
    /* Dorado */
  }

  .footer .social-icons a {
    margin: 0 10px;
    font-size: 1.5rem;
    color: #ffffff;
    /* Blanco */
  }

  .footer .social-icons a:hover {
    color: #f39c10;
    /* Dorado */
  }

  .btn-social {
    width: 25px;
    height: 25px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: #fff;
    transition: 0.3s;
    padding: 0;
    background-color: transparent;
    border: 1px solid #ffffff;
  }

  .btn-social img.social-icon {
    width: 16px;
    height: 16px;
    filter: invert(1);
    /* Hace que las imágenes se vean blancas */
  }

  .btn-social:hover {
    background: #f39c10;
    color: #fff;
    border-color: white;
  }
  h5{
    text-align: center;
  }

  .card-body {
    text-align: justify;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand navbar-brand-custom" href="./index.php">Gestión de Eventos     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
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