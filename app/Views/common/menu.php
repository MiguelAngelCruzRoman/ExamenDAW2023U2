
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADOPCIONES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Todas las mascotas 💖
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascotas/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascotas/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/mascotas/buscar') ?>">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Razas 🗺
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/razas/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/razas/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/razas/buscar') ?>">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dietas 🍖
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/dietas/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/dietas/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/dietas/buscar') ?>">Buscar</a></li>
          </ul>
        </li>

        <a class="nav-link " href="<?= base_url('index.php/admin/perros') ?>" role="button">
            Perros 🐶
          </a>

          <a class="nav-link" href="<?= base_url('index.php/admin/gatos') ?>" role="button">
            Gatos 🐱
          </a>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adoptadores 👨‍👧‍👧
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/adoptador/buscar') ?>">Buscar</a></li>
          </ul>
        </li>

        <a class="nav-link " href="<?= base_url('admin/graficas');?>" role="button" >
            Gráficas 📊
        </a>
        

      </ul>
      <a class="nav-link " href="<?= base_url('/');?>" role="button" >
            Vista de usuario 👁
        </a>
    </div>
  </div>
</nav>