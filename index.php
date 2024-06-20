<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/bootstrap5/bootstrap.min.css">
  <link rel="stylesheet" href="public/fontawesome-free-6.5.2-web/css/all.css">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Gestión de Eventos</title>
  <style>
    body {
      background-color: #ffffff;
      color: #2c3e50;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar-custom {
      background-color: #1abc9c;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 10px 20px;
    }

    .navbar-brand-custom {
      color: #ffffff;
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar-brand-custom:hover {
      color: #f39c10;
    }

    .navbar-nav .nav-link {
      color: #ecf0f1;
      margin-right: 15px;
    }

    .navbar-nav .nav-link:hover {
      color: #f39c10;
    }

    .hero-section {
      background: #16a085;
      color: white;
      padding: 35px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .hero-section p {
      font-size: 1.5rem;
    }

    .carousel-item img {
      height: 470px;
      object-fit: cover;
      width: 100%;
    
    }

    

    .services {
      padding: 60px 0;
    }

    .services .card {
      border: none;
      background-color: #ffffff;
      color: #2c3e50;
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
    }

    .services .card-text {
      font-size: 1rem;
    }

    .footer {
      background-color: #1abc9c;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
    }

    .footer a {
      color: #ecf0f1;
      text-decoration: none;
    }

    .footer a:hover {
      color: #f39c10;
    }

    .footer .social-icons a {
      margin: 0 10px;
      font-size: 1.5rem;
      color: #ffffff;
    }

    .footer .social-icons a:hover {
      color: #f39c10;
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
    }

    .btn-social:hover {
      background: #f39c10;
      color: #fff;
      border-color: white;
    }

    h5 {
      text-align: center;
    }

    .card-body {
      text-align: justify;
    }

    .contact-section {
      padding: 60px 0;
    }

    .contact-section h2 {
      margin-bottom: 40px;
      color: #2c3e50;
    }

    .contact-section .form-label {
      color: #2c3e50;
    }

    .contact-section .btn-primary {
      background-color: #1abc9c;
      border: none;
    }

    .contact-section .btn-primary:hover {
      background-color: #16a085;
    }

    #map {
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .error-message {
      color: red;
      font-size: 0.875em;
      margin-top: 5px;
    }

    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }

      .hero-section p {
        font-size: 1.2rem;
      }
    }

    @media (max-width: 576px) {
      .navbar-brand-custom {
        font-size: 1.2rem;
      }

      .navbar-nav .nav-link {
        margin-right: 0;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand navbar-brand-custom" href="./index.php">Gestión de Eventos <i
          class="fa-solid fa-handshake"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="./evento.php"><i class="fa-regular fa-calendar-plus"></i> Evento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cliente.php"><i class="fa-solid fa-user-plus"></i> Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./paquete.php"><i class="fa-solid fa-box-open"></i> Paquete</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-list-alt"></i> Proveedor</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/evento1.jpg" class="d-block w-100" alt="Imagen de Bienvenida">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="animate__animated animate__fadeInDown">Bienvenidos a Gestión de Eventos</h1>
            <p class="animate__animated animate__fadeInUp">Creamos eventos inolvidables para ti</p>
          </div>
        </div>
        <!-- <div class="carousel-item">
                <img src="img/evento.jpg" class="d-block w-100" alt="Imagen de Evento">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animate__animated animate__fadeInDown">Organización Profesional</h1>
                    <p class="animate__animated animate__fadeInUp">Nos encargamos de cada detalle</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hero3.jpg" class="d-block w-100" alt="Imagen de Decoración">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animate__animated animate__fadeInDown">Decoración Impresionante</h1>
                    <p class="animate__animated animate__fadeInUp">Crea el ambiente perfecto</p>
                </div>
            </div> -->
      </div>
    </div>
  </div>

  <div class="container services">
    <div class="row">
      <div class="col-md-4">
        <div class="card animate__animated animate__zoomIn">
          <img src="img/evento.jpg" class="card-img-top" alt="Imagen de Organización de Eventos">
          <div class="card-body">
            <h5 class="card-title">Eventos</h5>
            <p class="card-text">Desde bodas hasta conferencias, lo organizamos todo.</p>
            <p class="card-text">Nuestro equipo se encarga de todos los detalles, desde la planificación inicial hasta
              la
              ejecución el día del evento. Nos aseguramos de que todo salga perfecto para que puedas disfrutar de tu día
              especial sin preocupaciones.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card animate__animated animate__zoomIn">
          <img src="img/decoracion.jpg" class="card-img-top" alt="Imagen de Decoración">
          <div class="card-body">
            <h5 class="card-title">Decoración</h5>
            <p class="card-text">Decoraciones temáticas que impresionarán a tus invitados.</p>
            <p class="card-text">Ofrecemos una amplia gama de opciones de decoración para adaptarse a cualquier tema o
              estilo. Desde elegantes bodas hasta coloridas fiestas temáticas, nuestros diseñadores crearán un ambiente
              inolvidable.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card animate__animated animate__zoomIn">
          <img src="img/catering.jpg" class="card-img-top" alt="Imagen de Catering">
          <div class="card-body">
            <h5 class="card-title">Catering</h5>
            <p class="card-text">Deliciosas opciones de catering para cualquier tipo de evento.</p>
            <p class="card-text">Nuestro servicio de catering ofrece una variedad de menús personalizados para
              satisfacer
              todos los gustos y necesidades dietéticas. Desde aperitivos hasta platos principales y postres,
              garantizamos
              una experiencia culinaria de alta calidad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="container contact-section">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center">Contáctanos</h2>
        <form action="send_contact.php" method="post" onsubmit="return validateForm()">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="error-message" id="nameError"></div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="error-message" id="emailError"></div>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col-md-6">
        <h2 class="text-center">Nuestra Ubicación</h2>
        <div id="map" style="height: 400px; width: 100%;">
          <div class="ratio ratio-16x9" style="height: 100%;">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15907.221932829645!2d-79.37078101615434!3d-0.2534123025998522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d34ef1f00c0105%3A0x400bf6877c1e4c0!2sSanto%20Domingo%20de%20los%20Colorados%2C%20Ecuador!5e0!3m2!1ses!2ses!4v1672242444695!5m2!1ses!2ses"
              style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/facebook.png"
            alt="Facebook" class="social-icon"></a>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/linkedin.png"
            alt="LinkedIn" class="social-icon"></a>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-social" href="#"><img src="img/instagram.png"
            alt="Instagram" class="social-icon"></a>
      </div>
      <a class="mt-4">© 2024 Gestión de Eventos. Todos los derechos reservados.</a>
    </div>
  </footer>

  <?php include 'script.php'; ?>

  <script>
    function validateForm() {
      let isValid = true;

      // Validate name
      const nameInput = document.getElementById('name');
      const nameValue = nameInput.value.trim();
      const nameError = document.getElementById('nameError');

      const namePattern = /^[a-zA-Z\s]+$/;
      if (!namePattern.test(nameValue)) {
        nameError.textContent = 'El nombre solo debe contener letras y espacios.';
        isValid = false;
      } else {
        nameError.textContent = '';
      }

      // Validate email
      const emailInput = document.getElementById('email');
      const emailValue = emailInput.value.trim();
      const emailError = document.getElementById('emailError');

      const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailPattern.test(emailValue)) {
        emailError.textContent = 'Por favor, ingrese un correo electrónico válido.';
        isValid = false;
      } else {
        emailError.textContent = '';
      }

      return isValid;
    }
  </script>

  <script src="public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>

</html>