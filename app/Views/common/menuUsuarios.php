
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADOPCIONES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <a class="nav-link " href="<?= base_url('index.php/usuario/mascotas') ?>" role="button" >
            Todas las mascotas 💖
          </a>

          <a class="nav-link " href="<?= base_url('index.php/usuario/perros') ?>" role="button">
            Perros 🐶
          </a>

          <a class="nav-link" href="<?= base_url('index.php/usuario/gatos') ?>" role="button">
            Gatos 🐱
          </a>
      </ul>
      <a class="nav-link " href="<?= base_url('admin');?>" role="button" >
            Vista de administrador 👁
        </a>
    </div>
  </div>
</nav>