
<nav class="navbar navbar-expand-sm navbar-light pt-3 px-4 justify-content-between" id="panelNav">

  <a href="index.php" class="navbar-brand fs-1" id="tituloMenuDesplegable"> IES <strong><label>Nº9</label></strong>  </a>

  <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
  <button type="button" class="navbar-toggler rounded bg-dark border-transparent" data-bs-toggle="offcanvas"
  href="#panelDesplegable">
    <img src="img/bootstrap-icons-1.9.1/list.svg" width="50" height="50">
  </button>

  <div class="offcanvas offcanvas-top d-xs-block d-sm-none h-75" tabindex="-1" id="panelDesplegable">

    <div class="offcanvas-header bg-dark">
      <h5 class="offcanvas-title ps-3 fs-1 text-white" id="tituloMenuDesplegable">Menu</h5>
      <button type="button" class="btn-close pe-3" data-bs-dismiss="offcanvas" style="filter: invert(1);"></button>
    </div>

    <div class="offcanvas-body ps-3 d-flex flex-column h-100 bg-dark">
      <div class="container-fluid">
        <div class="row justify-content-between">

            <div class="col-6 d-flex justify-content-center align-items-center rounded">
              <button type="button" name="button" class="btn btn-outline-info btn-lg d-flex justify-content-center align-items-center
                                                         flex-column w-100 text-light">
                  <img src="img/iconos/libro.png" class="w-50 h-50">
                  <label id="itemsBarraDesplegable" class="mt-1">Carreras</label>
              </button>
            </div>

            <div class="col-5 d-flex justify-content-center align-items-center rounded">
              <button type="button" name="button" class="btn btn-outline-info btn-lg d-flex justify-content-center align-items-center
                                                         flex-column w-100 text-light">
                  <img src="img/iconos/libro.png" class="w-50 h-50">
                  <label id="itemsBarraDesplegable" class="mt-1">Carreras</label>
              </button>
            </div>

        </div>
      </div>
    </div>

    <div class="row">
        <div class="">

        </div>
    </div>

  </div>

  <div class="collapse navbar-collapse justify-content-end">
    <a href="index.php" class="my-1" id="itemsNavBar">Inicio</a>
    <a href="#" class="mx-2" id="itemsNavBar">Carreras</a>
    <a href="#" class="mx-2" id="itemsNavBar">Noticias</a>
    <a href="#" class="mx-2" id="itemsNavBar">Ayuda</a>
    <a href="#" class="mx-2" id="itemsNavBar">Noticias</a>
    <button type="button" class="btn btn-outline-dark">Campus Virtual</button>
  </div>

</nav>
