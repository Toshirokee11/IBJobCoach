<!------------------------- BANNER PRINCIPAL INICIO IBJOBCOACH ------------------------->
<div id="carousel" class="carousel slide hero-slides" data-ride="carousel" data-pause="hover" data-interval="5000">
  <!-- INDICADORES BANNER PRINCIPAL -->
  <ol class="carousel-indicators indicadores__principal">
    <li class="active" data-target="#carousel" data-slide-to="0"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <!-- PRIMER  SLIDER BANNER  -->
    <div class="carousel-item active first">
      <div class="container h-100 d-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">SOMOS OUTPLACEMENT PARA TODOS. DIGITAL, 24/7, AUTOGESTIONADO</h2>
              <a class="animated fadeInUp btn delicious-btn" href="precios">COMPRA AQUI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SEGUNDO  SLIDER BANNER  -->
    <div class="carousel-item operator">
      <div class="container h-100 d-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">SI ERES OPERARIO O TÉCNICO, TE SUGERIMOS 1 MES</h2>
              <a class="animated fadeInUp btn delicious-btn" href="precios">COMPRA AQUI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TERCERO  SLIDER BANNER  -->
    <div class="carousel-item analyst">
      <div class="container h-100 d-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">SI ERES ANALISTA O ESPECIALISTA, TE SUGERIMOS 2 MESES</h2>
              <a class="animated fadeInUp btn delicious-btn" href="precios">COMPRA AQUI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CUARTO  SLIDER BANNER  -->
    <div class="carousel-item boss">
      <div class="container h-100 d-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">SI ERES JEFE, TE SUGERIMOS 3 MESES</h2>
              <a class="animated fadeInUp btn delicious-btn" href="precios">COMPRA AQUI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- QUINTO  SLIDER BANNER  -->
    <div class="carousel-item manager">
      <div class="container h-100 d-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">SI ERES GERENTE, TE SUGERIMOS 5 MESES</h2>
              <a class="animated fadeInUp btn delicious-btn" href="precios">COMPRA AQUI</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- DIRECCIONES FLECHAS BANNER -->
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--------------------------  FIN BANNER PRINCIPAL IBJOBCOACH ---------------------------->
<!----------------------------EDITANDO FORMULARIO "DESEAS MEJORAR COMO EMPRES"------------->
<div id="contacto" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="hubspot" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header contacto ml-2 mr-2">
        <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 id="hubspot" class="m-0">DESEAS MEJORAR COMO EMPRESA</h4>
      </div>
      <div class="modal-body">
        <p class="title-contacto">Ponte en contacto con nosotros para mayor informacion sobre la plataforma, </p>
        <p class="title-contacto"> sus beneficios y los planes que tenemos para tu empresa.</p>
        <p class="title-contacto"> Rellena el formulario y nosotros nos pondremos en contacto a la brevedad.</p>
        <form action="contactoempresa.php" method="POST" class="ajax2" id="contactoempresa">
          <div class="row">
            <div class="col-lg-12 p-2">
              <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre de la empresa" required>
            </div>
            <div class="col-lg-12 p-2">
              <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese correo electrónico" required>
            </div>
            <div class="col-lg-6 p-2">
              <select type="text" name="pais" class="form-control" id="pais" required placeholder="País">
                <option value="">Seleccione su País</option>
                <option value="Argentina">Argentina y Uruguay</option>
                <option value="Brazil">Brasil</option>
                <option value="Chile">Chile</option>
                <option value="Peru">Perú</option>
                <option value="Colombia">Colombia</option>
                <option value="Mexico">México</option>
              </select>
              <!--<input type="text" class="form-control" name="pais" id="pais" placeholder="País" required>-->
            </div>
            <div class="col-lg-6 p-2">
              <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" pattern="[9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="El formato debe ser similar a 946696666" required>
            </div>
            <div class="col-lg-12 p-2">
              <input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellidos" required>
            </div>
            <div class="col-lg-12 p-2">
              <input type="text" class="form-control" name="cargo" id="pacargois" placeholder="Cargo que ocupa" required>
            </div>
            <script type="text/javascript">
              function cerrar() {
                window.close('close');
              }
            </script>

            <div class="col-lg-12" align="center">
              <button type="submit" onclick="cerrar();" class="btn btn-success btn-lg p-2 " style="
                 border-radius: 20px;width: 25%;">Enviar</button>
            </div>

          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!---------------------------- FIN EDITANDO FORMULARIO "DESEAS MEJORAR COMO EMPRES"------------>
<!-------------------------  SECCIÓN NOSOTROS ------------------------->
<section class="IBnosotros ancla" id="nosotros" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
  <div class="container-fluid">
    <div class="row m-1">
      <div class="linea col-md-9 mt-5"></div>
      <div class="col-md-3 col-lg-3">
        <p class="texto-nosotros">NOSOTROS</p>
      </div>
      <!-- IMAGEN SECCION NNOSOTROS -->
      <div class="img__gerente col-md-6">
        <img class="pb-1 img-fluid" src="views/img/nosotros/negocio-exitoso.jpg" alt="Imagen-nosotros">
        <p class="m-0 font-weight-bold">GERENTE</p>
        <p class="m-0">ALDAIR CHICAMA</p>
      </div>
      <!-- PARRAFO SECCION NOSOTROS -->
      <div class="descripcion-nosotros col-md-6 row ">
        <div class="d-text col-md-12 col-lg-6 ">
          <p class="text-justify">
            IBJobcoach es un conjunto de servicios orientados a entrenar a profesionales que desean
            reinsertarse en el
            mercado laboral. IBoutplacement a través de su equipo de consultores, le brindará todas las
            herramientas
            para mejorar su empleabilidad, desarrollar su marca personal, empoderar su reputación online,
            manejar
            su red de contactos y lo más importante, lo entrenaremos para conseguir trabajo que merece en el
            menor tiempo posible.
          </p>
        </div>
        <div class="d-text col-md-12 col-lg-6">
          <p class="text-justify">
            El Outplacement se ha posicionado a nivel mundial como una de las mejores y más óptimas técnicas para reducir al máximo el tiempo empleado en la recolocación
            laboral y lograr mejoras sustantivas en el empleo que se logra obtener y resulta imprescindible
            hoy en día que se considere como una
            estrategia necesaria para tener éxito en la carrera de cualquier profesional y ejecutivo.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!----------------------------- FIN SECCION DE NOSOTROS --------------------------->

<!-----------------------  SECCIÓN ¿QUE ES IBJOBCOACH? ----------------------->
<section class="IBJOB ancla" data-wow-duration="3s" id="ibjob"style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
  <div class="contenedor container-fluid">
    <div class="container py-3">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="titulo mt-1 mb-0">OUTPLACEMENT</h1>
          <p class="mt-3 subtitulo__outplacement">PARA TODOS</p>
          <p class="parrafo__ibjobcoach">
            En IBjobcoach te explicaremos todos los secretos de los procesos de reclutamiento y selección para que te acerques a tu puesto soñado en menos tiempo.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------------------------ FIN SECCION QUE ES IBJOBCOACH? ------------------->

<!--- -----------------------SECCION BENEFICIOS ---------------------------------->
<section class="page-section wow fadeInUp container-fluid" data-wow-duration="3s" id="prueba" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
  <div class="d-flex justify-content-center align-items-center" id="beneficios ">
    <div class="container-fluid">
      <div class="row m-1">
        <div class="col-md-3">
          <p class="texto-nosotros iz">BENEFICIOS</p>
        </div>
        <div class="linea col-md-9 mt-5"></div>
      </div>
      <div class="row">
        <div class="col-md-12 row pt-4 px-5">

          <div class="col-md col-sm-6 mb-3 p-0 text-center">
            <img class="iconos__beneficios" src="views/img/img_inicio/icono1.png" alt="" class="">
            <p class="text__beneficios1 text-center">VACANTES EN UN SOLO LUGAR</p>
          </div>
          <div class="col-md col-sm-6 mb-3 p-0 text-center icot">
            <img class="iconos__beneficios" src="views/img/img_inicio/icono2.png" alt="" class=" ">
            <p style="margin-top:0px" class="text-uppercase text__beneficios text-center">MEJOR DESEMPEÑO EN ENTREVISTAS</p>
          </div>
          <div class="col-md col-sm-6 mb-3 p-0 text-center">
            <img class="iconos__beneficios" src="views/img/img_inicio/icono3.png" alt="" class=" ">
            <p class="text__beneficios1 text-center">CONTACTO CON HEADHUNTERS Y RECLUTADORES</p>
          </div>
          <div class="col-md col-sm-6 mb-3 p-0 text-center icot">
            <img class="iconos__beneficios" src="views/img/img_inicio/icono4.png" alt="" class="">
            <p style="margin-top:0px" class="text-uppercase text__beneficios text-center">MEJORA TU CV PARA LOS RECLUTADORES</p>
          </div>
          <div class="col-md col-sm-6 mb-3 p-0 text-center">
            <img class="iconos__beneficios" src="views/img/img_inicio/icono5.png" alt="" class="">
            <p class="text__beneficios1 text-center">SESIONES VIRTUALES DE OUTPLACEMENT</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--------------------------- FIN SECCION BENEFICIOS -------------------------------->

<!--------------------------- SECCION PRUEBA GRATIS ---------------------------------->
<section class="IBnosotros ancla" id="PruebaGratuita" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
  <div class="container-fluid">
    <div class="row m-1">
      <div class="linea col-md-8 mt-5"></div>
        <div class="col-md-4">
          <p class="texto-nosotros">PRUEBA GRATIS</p>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ps-5">¡No hay mejor manera de conocer IBjobcoach que probándola!</h2>
        </div>
        <div id="PruebaGratuida">
          <form action="registro.php" method="POST" id="PruebaGratuita1">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="name" id="try-nome" placeholder="Nombre" required="required">
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="last_name" id="try-sobrenome" placeholder="Apellido" required="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <select name="country" class="form-control custom-select cargos_programa" required="required" id="try-pais">
                      <option value="">Seleccione su País</option>
                      <option value="Argentina">Argentina y Uruguay</option>
                      <option value="Brazil">Brasil</option>
                      <option value="Chile">Chile</option>
                      <option value="Peru" selected="">Perú</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Mexico">México</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="intl-tel-input allow-dropdown">
                      <div class="flag-container">
                        <div class="selected-flag" tabindex="0" title="Perú: +51">
                          <div class="iti-flag pe"></div>
                          <div class="iti-arrow"></div>
                        </div>
                        <ul class="country-list dropup hide">
                          <li class="country preferred active" data-dial-code="51" data-country-code="pe">
                            <div class="flag-box">
                              <div class="iti-flag pe"></div>
                            </div>
                            <span class="country-name">Perú</span>
                            <span class="dial-code">+51</span>
                          </li>
                          <li class="divider"></li>
                          <li class="country" data-dial-code="54" data-country-code="ar">
                            <div class="flag-box">
                              <div class="iti-flag ar"></div>
                            </div>
                            <span class="country-name">Argentina</span>
                            <span class="dial-code">+54</span>
                          </li>
                          <li class="country" data-dial-code="55" data-country-code="br">
                            <div class="flag-box">
                              <div class="iti-flag br"></div>
                            </div>
                            <span class="country-name">Brazil (Brasil)</span>
                            <span class="dial-code">+55</span>
                          </li>
                          <li class="country" data-dial-code="56" data-country-code="cl">
                            <div class="flag-box">
                              <div class="iti-flag cl"></div>
                            </div>
                            <span class="country-name">Chile</span>
                            <span class="dial-code">+56</span>
                          </li>
                          <li class="country" data-dial-code="57" data-country-code="co">
                            <div class="flag-box">
                              <div class="iti-flag co"></div>
                            </div>
                            <span class="country-name">Colombia</span>
                            <span class="dial-code">+57</span>
                          </li>
                          <li class="country highlight" data-dial-code="52" data-country-code="mx">
                            <div class="flag-box">
                              <div class="iti-flag mx"></div>
                            </div>
                            <span class="country-name">Mexico (México)</span>
                            <span class="dial-code">+52</span>
                          </li>
                          <li class="country" data-dial-code="51" data-country-code="pe">
                            <div class="flag-box">
                              <div class="iti-flag pe"></div>
                            </div>
                            <span class="country-name">Peru (Perú)</span>
                            <span class="dial-code">+51</span>
                          </li>
                          <li class="country" data-dial-code="1" data-country-code="us">
                            <div class="flag-box">
                              <div class="iti-flag us"></div>
                            </div>
                            <span class="country-name">United States</span>
                            <span class="dial-code">+1</span>
                          </li>
                        </ul>
                      </div>
                      <input type="tel" name="phone" class="form-control"  placeholder="Teléfono" required="required" autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <select name="position" class="form-control custom-select cargos_programa" required="required" id="try-posicao">
                      <option value="">Seleccione su Posición</option>
                      <option value="Analista">Analista</option>
                      <option value="Especialista">Especialista</option>
                      <option value="Jefe">Jefe</option>
                      <option value="SubGerente">SubGerente</option>
                      <option value="Gerente">Gerente</option>
                      <option value="Director">Director</option>
                      <option value="VP">VP</option>
                      <option value="Gerente General">Gerente General</option>
                      <option value="CEO">CEO</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" name="email" id="try-email" placeholder="Correo" required="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="password" class="form-control" name="password" id="try-senha" minlength="8" placeholder="Password">
                  </div>
                </div>
              </div>
              <div class="col-md-4 form-txt">
                <p>Por 2 días obtén acceso a la plataforma de forma gratuita y descubre la variedad de contenidos que existe en ella.</p>
                <div class="form-group col-md-12"  style="position: relative; width: 100%; padding: 0 15px">
                  <div class="form-group check">
                    <label class="txt-check">Actualmente estoy trabajando.
                      <input type="checkbox" name="working" id="jobs" value="1">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-success">Accede a IBjobcoach <i class="fal fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!---- ------------------------ FIN SECCION PRUEBA GRATIS ----------------------------------->