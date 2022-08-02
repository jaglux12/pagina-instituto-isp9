
<nav class="navbar navbar-expand-md navbar-light pt-5 px-3 justify-content-between">

  <a href="index.php" class="navbar-brand fs-1 d-xs-block d-md-none ms-4" id="tituloMenuDesplegable"> I.E.S Nº9  </a>

  <!-- <img src="img/logo_ies.png" width="30px" height="45px"class="d-none d-md-block ms-5"> -->
  <a href="index.php" class="navbar-brand text-light fs-4 d-none d-md-block  ms-5" id="tituloMenuDesplegable"> Instituto de Educación <br> Superior <strong><label id="tituloMenuDesplegable" >Nº9</label></strong>  </a>

  <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
  <button type="button" class="navbar-toggler rounded  border-transparent me-4 border-0" data-bs-toggle="offcanvas"
  href="#panelDesplegable">
    <img src="img/bootstrap-icons-1.9.1/list.svg" style="filter: invert(1);" width="50" height="50">
  </button>

  <div class="offcanvas offcanvas-top d-sm-block d-md-none h-75" tabindex="-1" id="panelDesplegable">

    <div class="offcanvas-header bg-dark">
      <h5 class="offcanvas-title ps-3 fs-1 text-white" id="tituloMenuDesplegable">Menu</h5>
      <button type="button" class="btn-close pe-3" data-bs-dismiss="offcanvas" style="filter: invert(1);"></button>
    </div>

    <div class="offcanvas-body ps-3 d-flex flex-column h-100 bg-dark">

      <div class="container-fluid">

        <!-- Menú numero uno -->

        <div class="accordion" id="accordionExample">

          <div class="accordion-item border-0" id="itemAccordation">
            <h2 class="accordion-header bg-transparent">
                <button class="accordion-button collapsed bg-transparent"  id="itemAccordation" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <img src="img/bootstrap-icons-1.9.1/book-fill.svg" class="me-2" width="25px" height="25px"alt="">
                    Carreras
                </button>
            </h2>

          <div id="collapseOne" class="accordion-collapse collapse bg-transparent" id="itemAccordation" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start">
                    Tecnicaturas
                </button>

                <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1">
                    Profesorados
                </button>
              </div>

         </div>

         <!-- Menú numero dos -->

         <div class="accordion" id="accordionDos">

           <div class="accordion-item border-0" id="itemAccordation">
             <h2 class="accordion-header bg-transparent">
                 <button class="accordion-button collapsed bg-transparent"  id="itemAccordation" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     <img src="img/bootstrap-icons-1.9.1/person-square.svg" class="me-2" width="25px" height="25px"alt="">
                     Alumnos
                 </button>
             </h2>

           <div id="collapseTwo" class="accordion-collapse collapse bg-transparent" id="itemAccordation" aria-labelledby="headingThree" data-bs-parent="#accordionDos">
               <div class="accordion-body">

                 <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start">
                     Solicitudes
                 </button>

                 <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1">
                     Inscripción
                 </button>

                 <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1">
                     Avances de carrera
                 </button>
                 <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1">
                     Exámenes a distancia
                 </button>

               </div>

          </div>

          <!-- Menú numero tres -->

          <div class="accordion" id="accordionTres">

            <div class="accordion-item border-0" id="itemAccordation">
              <h2 class="accordion-header bg-transparent">
                  <button class="accordion-button collapsed bg-transparent"  id="itemAccordation" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <img src="img/bootstrap-icons-1.9.1/chat-dots-fill.svg" class="me-2" width="25px" height="25px"alt="">
                      Contacto
                  </button>
              </h2>

            <div id="collapseThree" class="accordion-collapse collapse bg-transparent" id="itemAccordation" aria-labelledby="headingThree" data-bs-parent="#accordionTres">
                <div class="accordion-body">

                  <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start"
                      onclick="location.href='https://www.instagram.com/instituto_superior9/'">
                      <img src="img/bootstrap-icons-1.9.1/instagram.svg" class="me-2" alt="">
                      Instagram
                  </button>

                  <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1"
                     onclick="location.href='https://www.facebook.com/Instituto-Superior-de-Profesorado-N9-410148382374391/'">
                    <img src="img/bootstrap-icons-1.9.1/facebook.svg" class="me-2" alt="">
                      Facebook
                  </button>

                  <button type="button" name="button" class="btn btn-outline-light text-dark w-100 py-2 rounded text-start mt-1"
                    onclick="location.href='mailto:institutojms009@gmail.com?Subject=Consulta'">
                      <img src="img/bootstrap-icons-1.9.1/envelope-fill.svg" class="me-2" alt="">
                      Email
                  </button>

                </div>

           </div>

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
