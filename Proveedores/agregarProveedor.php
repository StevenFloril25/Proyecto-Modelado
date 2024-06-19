<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crud Mongo</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Gestión de Eventos     </a>
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
          <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-truck"></i> Registrar Proveedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-list-alt"></i> Registrar Tipo de Evento</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="card fondoDelete">
    <div class="card-body">
      <a href="../proveedor.php" class="btn btn-outline-info mb-3">
        <i class="fa-solid fa-rotate-left"></i> Regresar
      </a>
      <h2>Registrar nuevo Proveedor</h2>

      <form action="../procesos/insertarProveedor.php" method="post" class="form-horizontal">
          <div class="form-group row">
              <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="contacto" class="col-sm-2 col-form-label">Contacto</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" id="contacto" name="contacto" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefono" name="telefono" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="servicios_ofrecidos" class="col-sm-2 col-form-label">Servicios Ofrecidos</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="servicios_ofrecidos" name="servicios_ofrecidos" required>
              </div>
          </div>
          <div class="form-group row">
              <label for="eventos_proveidos" class="col-sm-2 col-form-label">Eventos Proveídos</label>
              <div class="col-sm-10" id="eventos_proveidos">
                  <div class="input-group mb-2">
                      <input type="text" class="form-control" name="eventos_proveidos_id[]" placeholder="ID del Evento">
                      <input type="text" class="form-control" name="nombres_eventos_proveidos[]" placeholder="Nombre del Evento">
                      <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
                  </div>
              </div>
              <div class="col-sm-10 offset-sm-2">
                  <button type="button" class="btn btn-outline-primary" onclick="addEvent()"><i class="fa-solid fa-plus"></i> Agregar Evento Proveído</button>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
              </div>
          </div>
      </form>
      <hr>
    </div>
  </div>
</div>

<script>
    function addEvent() {
        const container = document.getElementById('eventos_proveidos');
        const newEvent = document.createElement('div');
        newEvent.className = 'input-group mb-2';
        newEvent.innerHTML = `
            <input type="text" class="form-control" name="eventos_proveidos_id[]" placeholder="ID del Evento">
            <input type="text" class="form-control" name="nombres_eventos_proveidos[]" placeholder="Nombre del Evento">
            <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
        `;
        container.appendChild(newEvent);
    }

    function removeEvent(button) {
        button.parentElement.remove();
    }
</script>
<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
