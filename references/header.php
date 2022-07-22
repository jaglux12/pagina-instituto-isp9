
<nav class="navbar navbar-expand-sm navbar-light mt-4 px-5 justify-content-between" id="panelNav">

  <a href="index.php" class="navbar-brand" id="tituloBargo">
    <img src="img/logo.png" width="45%" height="45%">
  </a>

  <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
  <button type="button" class="navbar-toggler rounded-pill border-transparent" data-bs-toggle="offcanvas"
  href="#panelDesplegable">
    <img src="imgs/bootstrap-icons-1.9.1/three-dots.svg" alt="Bootstrap" width="50" height="50">
  </button>

  <div class="offcanvas offcanvas-top d-xs-block d-sm-none h-50" tabindex="-1" id="panelDesplegable">

    <div class="offcanvas-header">
      <h5 class="offcanvas-title ps-3"id="tituloBargo">Menu</h5>
      <button type="button" class="btn-close pe-3" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body ps-3 d-flex justify-content-center align-items-center flex-column">
      <a href="index.php" id="tituloOpcionesPrincipales" class="my-1">Inicio</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Carreras</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Noticias</a>
      <a href="#" id="tituloOpcionesPrincipales" class="my-1">Ayuda</a>
      <button type="button" class="btn btn-outline-secondary my-2">Noticias</button>
      <button type="button" class="btn btn-dark">Campus Virtual</button>
    </div>

  </div>

  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarContenido">
    <a href="index.php" id="tituloOpcionesPrincipales" class="my-1">Inicio</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Carreras</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Noticias</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Ayuda</a>
    <a href="#" id="tituloOpcionesPrincipales" class="mx-2">Noticias</a>
    <button type="button" class="btn btn-outline-dark">Campus Virtual</button>
  </div>

</nav>
