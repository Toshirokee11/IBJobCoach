<?php
   if (session_status() === PHP_SESSION_ACTIVE) {
    session_destroy();
}
?>

<!-----------------------  NAV LOGUIN  -------------------------------->
<nav class="navbar nav__principal  navbar-expand-lg navbar-light top-navbar" data-toggle="collapse">
    <div class="container">
        <a class="navbar-brand" href="inicio"><img src="views/img/logo/ibjobcoach1.jpg" style="height: 40px; width: 180px; border-style: none;" /></a>
        <button class="boton__navegacion navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
            <ul class="nav__texto navbar-nav pull-right">
                <li class="nav-item">
                    <a class="link__navegacion nav-link active" href="inicio#nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="link__navegacion nav-link" href="inicio#ibjob">¿QUÉ ES IBJOBCOACH?</a>
                </li>
                <li class="nav-item">
                    <a class="link__navegacion nav-link" href="inicio#beneficios">BENEFICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="link__navegacion nav-link" href="inicio#contactanos">PRUEBA GRATIS</a>
                </li>
                <li class="nav-item">
                    <a class="link__navegacion nav-link" href="precios">PRECIOS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--------------------------------  NAV LOGIN ------------------------------------->
<!--------------------------------  LOGIN ------------------------------------->
<section class="logines" style="background:url(views/img/login/coworking.jpg); background-size:cover; background-position:center center;">
    <div class="form-container">
        <h1 class="titulo_blanco">Ya soy Cliente de Ibjobcoach</h1>
        <form action="index1" name="user" method="POST" id="iniciarSesion">
            <div class="control">
                <label class="sub" for="email">Correo</label>
                <input type="email " name="email" id="login-email">
            </div>
            <div class="control">
                <label class="sub" for="password">Contraseña</label>
                <input type="password" name="password" id="login-password" >
            </div>
            <class class="control">
                <input type="submit" name="login" value="Iniciar Sesión">
            </class>
            <class class="control">
                <input type="button" value="prueba gratis">
            </class>
            <div class="link">
                <a href="forgot">te olvidaste tu contraseña </a> <br>
                <a href="resendConfirmation"> Reenviar confirmacion de email </a>
            </div>
        </form>

    </div>
</section>

<!--------------------------------  Fin LOGIN ------------------------------------->

<!--------------------------------  NAV USARON SESIONES  ------------------------------------->
<div class="team-section ">
    <div class="container_titulo">
        <div class="row">
            <div class="title_name">
                <h1>Ellos también usaron IBjobcoach</h1>
                <p>Clientes de Sesiones </p>
            </div>
        </div>
        <div class="team-card">
            <div class="card">
                <div class="image-section">
                    <img src="views/img/login/depoimento-mauricio.jpg" alt="">
                </div>
                <div class="content">
                    <h3>MARCELO INCHI</h3>
                    <h4>Gerente</h4>
                    <p>orem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>