<?php

require_once "modelos/basededatos.php";

if(!isset($_GET['c'])){
    require_once "controladores/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador,"inicio"));
}else{
    $controlador = $_GET['c'];
    require_once "controladores/$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a'])? $_GET['a'] : "inicio";
    call_user_func(array($controlador,$accion));
}