
<nav class="navbar navbar-expand-sm navbar-light mt-4 px-4 justify-content-between" id="panelNav">

  <a href="index.php" class="navbar-brand fs-1" id="tituloMenuPrincipal"> Instituto </a>

  <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
  <button type="button" class="navbar-toggler rounded bg-dark border-transparent" data-bs-toggle="offcanvas"
  href="#panelDesplegable">
    <img src="img/bootstrap-icons-1.9.1/list.svg" width="50" height="50">
  </button>

  <div class="offcanvas offcanvas-top d-xs-block d-sm-none h-50" tabindex="-1" id="panelDesplegable">

    <div class="offcanvas-header">
      <h5 class="offcanvas-title ps-3">Menu</h5>
      <button type="button" class="btn-close pe-3" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body ps-3 d-flex justify-content-center align-items-center flex-column h-100 bg-dark">
      <a href="index.php" id="tituloOpcionesPrincipales" class="my-1">Inicio</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Carreras</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Noticias</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Ayuda</a>
      <button type="button" class="btn btn-dark">Campus Virtual</button>
    </div>

  </div>

  <div class="collapse navbar-collapse justify-content-end">
    <a href="index.php" class="my-1" id="tituloOpcionesPrincipales">Inicio</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Carreras</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Noticias</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Ayuda</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Noticias</a>
    <button type="button" class="btn btn-outline-dark">Campus Virtual</button>
  </div>

</nav>
