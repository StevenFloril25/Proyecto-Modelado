<?php include 'header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Gestión de Eventos SANA SANA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./evento.php"><i class="fa-regular fa-calendar-plus"></i> Agregar Cliente</a>
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

<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h2>Gestion de evento SANA SANA</h2>
      <a href="#" class="btn btn-primary mb-3">
        <i class="fa-regular fa-calendar-plus"></i> Agregar nuevo evento
      </a>
      <hr>
      <table class="table table-sm table-hover table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Evento 1</td>
            <td>2021-12-12</td>
            <td class="text-center">
              <form action="" method="post">
                <button class="btn btn-warning btn-sm" type="submit" name="editar">
                  <i class="fa-solid fa-square-pen"></i>
                </button>
              </form>
            </td>
            <td class="text-center">
              <form action="" method="post">
                <button class="btn btn-danger btn-sm" type="submit" name="eliminar">
                  <i class="fa-solid fa-eraser"></i>
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'script.php'; ?>
