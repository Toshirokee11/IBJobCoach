
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
}
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header('Location: login');
    session_destroy();
    //consulta usuario
}
$_SESSION['prueba'] = "prueba1";
include 'listar.php';
$nombre_usuario = $_SESSION['email'];

$sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia->execute([$nombre_usuario]);

$persona = $sentencia->fetch(PDO::FETCH_OBJ);

$email = $persona->correo;
$estado = $persona->opcion;
$usuariPost = $persona->nombrecliente;
$usuariPost1 = $persona->apellidocliente;
$_SESSION['name_user'] = $usuariPost;
$_SESSION['last_name'] = $usuariPost1;
$_SESSION['idlicencia'] = $persona->idlicencia;
$_SESSION['fase_1'] = $persona->fase_1;
$_SESSION['fase_2'] = $persona->fase_2;
$_SESSION['fase_3'] = $persona->fase_3;
$fase1 = $persona->fase_1;
$fase2 = $persona->fase_2;
$fase3 = $persona->fase_3;

//consulta datos2
$sentencia_2 = $connect->prepare("SELECT * FROM cliente where idlicencia = ?");
$sentencia_2->execute([$persona->idlicencia]);
$persona2 = $sentencia_2->fetch(PDO::FETCH_OBJ);

$memuero = $persona2;
//Consultas para el foro
$sentencia = $connect->query("SELECT f.idforo, f.autor,f.foto,f.fecha,f.titulo,f.vistas FROM foro f ORDER BY fecha DESC");
$foros = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<nav class="navbar navbar-dark navbar-expand  justify-content-center" style="background-color: #DCDDDC;">
    <div class="container">
        <ul class="navbar-nav nav-justified w-100 text-center mt-1 scroll-to-tab">
            <li class="nav-item">
                <a href="#" class="nav-link d-flex flex-column" data-toggle="collapse">
                    <span class="far fa-compass"></span>
                    <span class="d-none d-sm-inline mt-1">Manual de Usuario</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex flex-column" data-toggle="collapse">
                    <span class="fas fa-tasks"></span>
                    <span class="d-none d-sm-inline mt-1">Mi Programa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex flex-column" data-toggle="collapse">
                    <span class="fas fa-briefcase"></span>
                    <span class="d-none d-sm-inline mt-1">Jobs</span>
                </a>
            </li>
            <li class="header-profile" onclick="toggleProfile()">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        <span class="fas fa-user"></span><br>
                        <span class="d-none d-sm-inline mt-1">Mi Perfil</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item scroll-to-tab" href="/#perfil-tab" onclick="openNavArea('perfil'); closeNav()" aria-controls="perfil-tab" role="tab" data-toggle="tab" aria-expanded="true">
                            <!-- <img src="img/login/User12.png" alt="foto" class="img-fluid img-thumbnail rounded-circle previsualizar"> -->
                            <div class="dropdown-profile-text, mainmenu">
                                <div>
                                    <img id="perfil"  src="views/img/login/perfil.png">
                                </div>
                                <div>    
                                    <p class="profile-user-name bold" name="email"><?php echo $usuariPost ?></p>
                                    <p class="profile-see-profile">Ver Perfil</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item no-scroll" href="javascript: void(0);" data-toggle="modal" data-target="#modal-found-a-job" class="btn btn-primary btn-sm">
                            <span>Encontré Trabajo</span>
                        </a>
                        <a class="dropdown-item logout-item no-scroll" href="login" class="btn btn-primary btn-sm" id="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Salir</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown-menu active" aria-labelledby="dropdownPerfil">
                    <a class="dropdown-item scroll-to-tab" href="/#perfil-tab" onclick="openNavArea('perfil'); closeNav()" aria-controls="perfil-tab" role="tab" data-toggle="tab" aria-expanded="true"></a>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link d-flex flex-column" data-toggle="collapse">
                    <span class="fas fa-book"></span>
                    <span class="d-none d-sm-inline mt-1">Biblioteca</span>
                </a>
            </li>

        </ul>
</nav>



<div class="mainmenu">
    
    <div class="col1">
        <p id=col1-fonts>
            <?php echo $usuariPost ?>, este es <br>tu progreso... </br>
        </p>
    </div>
    
    <img id="persona" src="views/img/login/perfil.png" >

    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti officiis error incidunt quaerat. Dignissimos reiciendis, voluptates numquam recusandae impedit, mollitia vero excepturi qui doloremque in repudiandae ad esse optio quaerat.</p>
    </div>
</div>

<!--LO QUE HIZE FIN Erick :c-->

<!--<div class="row col-md-7 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-1 ">
    <div class="col-md-12">
        <p class="txt-banner-section center p-1"><?php echo $usuariPost ?>, este es tu progreso... </p>
    </div>
    <div class="col-md-12">
        <p class="txt-banner-section center p-1"><?php echo $usuariPost1 ?></p>
    </div>
    <div class="col-md-12">
        <p class="txt-banner-section center p-1">Cuenta: <?php echo $email ?></p>
    </div>
    <div class="col-md-12">
        <p class="txt-banner-section center p-1">Estado: <?php echo $estado ?></p>
    </div>
</div>-->

<div id="side-menu">
    <div class="close-side-menu">
        <a class="close-menu-button" href="javascript:void(0)" onclick="toogleNav()">&times;</a>
    </div>
    <ul class="scroll-to-tab side-menu-area-item">
        <a href="https://www.poliglota.org/test-online" target="_blank">
            <li>
                <div class="menu-icon">
                    <img src="views/img/login/poliglota-logo.png" width="20px" alt="Poliglota">
                    <!-- <i class="icon-poliglota"></i> -->
                </div>
                <span>Poliglota - Prueba de Inglés</span>
            </li>
        </a>
        <a href="/#videos-tab" aria-controls="videos-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('videos'); closeNav()">
                <div class="menu-icon"><i class="fa fa-file-video"></i></div>
                <span>Videos de los Programa</span>
            </li>
        </a>
        <a href="/#Templates-tab" aria-controls="Templates-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('Templates'); closeNav()">
                <div class="menu-icon"><i class="fa fa-file"></i></div>
                <span>Templates</span>
            </li>
        </a>
        <a href="/#headhunters-tab" aria-controls="headhunters-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('headhunters'); closeNav()">
                <div class="menu-icon"><i class="fa fa-street-view"></i></div>
                <span>HeadHunters</span>
            </li>
        </a>
        <a href="/#recruiters-tab" aria-controls="recruiters-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('recruiters'); closeNav()">
                <div class="menu-icon"><i class="fa fa-search"></i></div>
                <span>Reclutadores</span>
            </li>
        </a>
        <a href="/#smtm-tab" aria-controls="smtm-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('smtm'); closeNav()">
                <div class="menu-icon"><i class="fa fa-money-bill"></i></div>
                <span>Informes Salariales</span>
            </li>
        </a>
        <a href="/#employability-tab" aria-controls="employability-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('employability'); closeNav()">
                <div class="menu-icon"><i class="fa fa-chart-area"></i></div>
                <span>Análisis de Empleabilidad</span>
            </li>
        </a>
        <a href="/#agenda-tab" aria-controls="agenda-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('agenda'); closeNav()">
                <div class="menu-icon"><i class="fa fa-calendar"></i></div>
                <span>Planilla de Agenda Optima</span>
            </li>
        </a>
        <a href="/#companies-tab" aria-controls="companies-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('companies'); closeNav()">
                <div class="menu-icon"><i class="fa fa-building"></i></div>
                <span>Empresas por industria</span>
            </li>
        </a>
        <a href="/#descriptions-tab" aria-controls="descriptions-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('descriptions'); closeNav()">
                <div class="menu-icon"><i class="fa fa-id-card"></i></div>
                <span>Descripciones de Cargos</span>
            </li>
        </a>
        <a href="/#translation-tab" aria-controls="translation-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('translation'); closeNav()">
                <div class="menu-icon"><i class="fa fa-font"></i></div>
                <span>Traducción de CV</span>
            </li>
        </a>
        <a href="/#business-tab" aria-controls="business-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('business'); closeNav()">
                <div class="menu-icon"><i class="fa fa-puzzle-piece"></i></div>
                <span>Emprendimiento</span>
            </li>
        </a>
        <a href="/#shelf-tab" aria-controls="shelf-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('shelf'); closeNav()">
                <div class="menu-icon"><i class="fa fa-film"></i></div>
                <span>Peliculas y Libros</span>
            </li>
        </a>
        <a href="/#linkedin-content-tab" aria-controls="linkedin-content-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('linkedin-content'); closeNav()">
                <div class="menu-icon"><i class="fab fa-linkedin-in"></i></div>
                <span>Contenido de Linkedin</span>
            </li>
        </a>
        <a href="/#financial-tab" aria-controls="financial-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('financial'); closeNav()">
                <div class="menu-icon"><i class="fa fa-calculator"></i></div>
                <span>Herramienta de planificación financiera</span>
            </li>
        </a>
        <a href="/#tendencies-tab" aria-controls="tendencies-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('tendencies'); closeNav()">
                <div class="menu-icon"><i class="fa fa-chart-line"></i></div>
                <span>Nuevas Tendencias Laborales</span>
            </li>
        </a>
        <a href="/#young-tab" aria-controls="young-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('young'); closeNav()">
                <div class="menu-icon"><i class="fa fa-child"></i></div>
                <span>Joven Emprendedor</span>
            </li>
        </a>
        <a href="/#coworks-tab" aria-controls="coworks-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('coworks'); closeNav()">
                <div class="menu-icon"><i class="fa fa-link"></i></div>
                <span>Lista de Coworkings</span>
            </li>
        </a>
        <a href="/#forum-tab" aria-controls="forum-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('forum'); closeNav()">
                <div class="menu-icon"><i class="fa fa-comments"></i></div>
                <span>Foro de discusión</span>
            </li>
        </a>
        <a href="/#my-area-tab" aria-controls="my-area-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('my-area'); closeNav()">
                <div class="menu-icon"><i class="fa fa-user"></i></div>
                <span>Mi información</span>
            </li>
        </a>
        <a href="/#live-tab" aria-controls="live-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('live'); closeNav()">
                <div class="menu-icon"><i class="fa fa-video"></i></div>
                <span>Webinars en vivo</span>
            </li>
        </a>
        <a href="/#firstjob-tab" aria-controls="firstjob-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('firstjob'); closeNav()">
                <div class="menu-icon"><i class="fa fa-search"></i></div>
                <span>Buscando tu primer Trabajo</span>
            </li>
        </a>
        
        <a href="/#linkedin-tab" aria-controls="linkedin-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('linkedin'); closeNav()">
                <div class="menu-icon"><i class="fab fa-linkedin-in"></i></div>
                <span>LinkedIn</span>
            </li>
        </a>
        <a href="/#cv-tab" aria-controls="cv-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('cv'); closeNav()">
                <div class="menu-icon"><i class="far fa-file-alt"></i></div>
                <span>CV</span>
            </li>
        </a>
        <a href="/#prospeccao-redes-tab" aria-controls="prospeccao-redes-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('prospeccao-redes'); closeNav()">
                <div class="menu-icon"><i class="fas fa-chart-area"></i></div>
                <span>Prospección y redes</span>
            </li>
        </a>
        <a href="/#proposta-valor-tab" aria-controls="proposta-valor-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('proposta-valor'); closeNav()">
                <div class="menu-icon"><i class="fas fa-chart-line"></i></div>
                <span>Propuesta de Valor</span>
            </li>
        </a>
        <a href="areas.php?=#tecnicas-entrevista-tab" aria-controls="tecnicas-entrevista-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('tecnicas-entrevista'); closeNav()">
                <div class="menu-icon"><i class="far fa-comments"></i></div>
                <span>Técnicas de entrevistas</span>
            </li>
        </a>
        <a href="/#valor-mercado-tab" aria-controls="valor-mercado-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('valor-mercado'); closeNav()">
                <div class="menu-icon"><i class="fas fa-money-bill"></i></div>
                <span>Valor de mercado</span>
            </li>
        </a>
        <a href="/#match-mercado-tab" aria-controls="match-mercado-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('match-mercado'); closeNav()">
                <div class="menu-icon"><i class="far fa-building"></i></div>
                <span>Match de Mercado</span>
            </li>
        </a>
        <a href="/#conhecimento-pessoal-tab" aria-controls="conhecimento-pessoal-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('conhecimento-pessoal'); closeNav()">
                <div class="menu-icon"><i class="fas fa-user"></i></div>
                <span>Conocimiento personal</span>
            </li>
        </a>
        <a href="/#boards-tab" aria-controls="boards-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('boards'); closeNav()">
                <div class="menu-icon"><i class="fa fa-address-book"></i></div>
                <span>Job Boards</span>
            </li>
        </a>
        <a href="/#alumni-tab" aria-controls="alumni-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('alumni'); closeNav()">
                <div class="menu-icon"><i class="fa fa-user-circle"></i></div>
                <span>Alumni de usuários</span>
            </li>
        </a>
        <a href="/#courses-tab" aria-controls="courses-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('courses'); closeNav()">
                <div class="menu-icon"><i class="fa fa-hand-pointer"></i></div>
                <span>Cursos Online</span>
            </li>
        </a>
        <a href="/#process-tab" aria-controls="process-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('process'); closeNav()">
                <div class="menu-icon"><i class="fa fa-file-alt"></i></div>
                <span>Caza al Proceso</span>
            </li>
        </a>
        <a href="/#partners-tab" aria-controls="partners-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('partners'); closeNav()">
                <div class="menu-icon"><i class="fa fa-building"></i></div>
                <span>Empresas Partners</span>
            </li>
        </a>
        <a href="/#my-consultant-tab" aria-controls="my-consultant-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('my-consultant'); closeNav()">
                <div class="menu-icon"><i class="fa fa-graduation-cap"></i></div>
                <span>Mi Consultor</span>
            </li>
        </a>
        <a href="/#library-tab" aria-controls="library-tab" role="tab" data-toggle="tab">
            <li onclick="openNavArea('library'); closeNav()">
                <div class="menu-icon"><i class="fa fa-book"></i></div>
                <span>Biblioteca de empleabilidad</span>
            </li>
        </a>
    </ul>
</div>
<div id="menu-overflow" onclick="toogleNav()"></div>