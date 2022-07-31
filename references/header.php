
<nav class="navbar navbar-expand-md navbar-light pt-5 px-3 justify-content-between">

  <a href="index.php" class="navbar-brand fs-1 d-xs-block d-md-none ms-4" id="tituloMenuDesplegable"> IES <strong><label >Nº9</label></strong>  </a>

  <!-- <img src="img/logo_ies.png" width="30px" height="45px"class="d-none d-md-block ms-5"> -->
  <a href="index.php" class="navbar-brand text-light fs-5 d-none d-md-block ms-5" id="tituloPresentacion"> Instituto de Educación <br> Superior <strong><label id="tituloMenuDesplegable" >Nº9</label></strong>  </a>

  <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
  <button type="button" class="navbar-toggler rounded bg-dark border-transparent" data-bs-toggle="offcanvas"
  href="#panelDesplegable">
    <img src="img/bootstrap-icons-1.9.1/list.svg" width="50" height="50">
  </button>

  <div class="offcanvas offcanvas-top d-sm-block d-md-none h-75" tabindex="-1" id="panelDesplegable">

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
                  <img src="img/bootstrap-icons-1.9.1/journal-bookmark-fill.svg" style="filter: invert(1);" class="w-25 h-25">
                  <label id="itemsBarraDesplegable" class="mt-1 fs-5">Carreras</label>
              </button>
            </div>

            <div class="col-6 d-flex justify-content-center align-items-center rounded">
              <button type="button" name="button" class="btn btn-outline-warning btn-lg d-flex justify-content-center align-items-center
                                                         flex-column w-100 text-light">
                  <img src="img/bootstrap-icons-1.9.1/newspaper.svg" style="filter: invert(1);" class="w-25 h-25">
                  <label id="itemsBarraDesplegable" class="mt-1 fs-5">Noticias</label>
              </button>
            </div>

        </div>

        <div class="row justify-content-between mt-3">

            <div class="col-12 d-flex justify-content-center align-items-center rounded">
              <button type="button" name="button" class="btn btn-outline-secondary btn-lg d-flex justify-content-center align-items-center
                                                         flex-column w-100 text-light">
                  <img src="img/bootstrap-icons-1.9.1/question-square-fill.svg" style="filter: invert(1);" class="w-25 h-25">
                  <label id="itemsBarraDesplegable" class="mt-1 fs-5">Ayuda</label>
              </button>
            </div>

        </div>

        <div class="row justify-content-between mt-3">

            <div class="col-12 d-flex justify-content-center align-items-center rounded">
              <button type="button" name="button" class="btn btn-primary btn-lg d-flex justify-content-center align-items-center
                                                         flex-column w-100 text-light">
                  <label id="itemsBarraDesplegable" class="mt-1 fs-5">Campus Virtual</label>
              </button>
            </div>

        </div>

      </div>
    </div>

  </div>

  <div class="collapse navbar-collapse justify-content-end me-5">
    <a href="#" class="mx-2" id="itemsNavBar">Carreras</a>
    <a href="#" class="mx-2" id="itemsNavBar">Noticias</a>
    <a href="#" class="mx-2" id="itemsNavBar">Ayuda</a>
    <button type="button" class="btn btn-outline-dark">Campus Virtual</button>
  </div>

</nav>
