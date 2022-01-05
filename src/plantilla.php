<?php
require_once 'views/layout/header.php';

/*=============================================
      CONTENIDO
      =============================================*/

if (isset($_GET['ruta']) && $_GET["ruta"] != null) {
    /*Rutas que incluyan el menu y footer*/
    if (
        $_GET['ruta'] == "inicio" ||
        $_GET['ruta'] == "prueba" ||
        $_GET['ruta'] == "precio" ||
        $_GET['ruta'] == "forgot"
    ) {
        include_once "views/layout/menu.php";
        include_once "views/" . $_GET['ruta'] . ".php";
        include_once "views/layout/footer.php";
    } else
        /*Rutas que incluyan solo el footer*/
        if (
            $_GET['ruta'] == "login"
        ) {
            include_once "views/" . $_GET['ruta'] . ".php";
            include "views/layout/footer.php";
        } else
            /*Rutas que no incluyan el menu*/
            if (
                $_GET['ruta'] == "index1"||
                $_GET['ruta'] == "quiero-mi-E-book"||
                $_GET['ruta'] == "ebook-premium"
            ) {
                include "views/" . $_GET['ruta'] . ".php";
                include 'views/layout/footer.php';
            } else {
                include_once "views/Layout/404.php";
            }
} else{
    include_once 'views/layout/menu.php';
    include_once 'views/inicio.php';
    include_once 'views/layout/footer.php';
}
