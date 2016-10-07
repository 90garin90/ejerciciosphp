<?php
    /**
    * 
    */
require_once 'usuario.php';
Class App
{
     private $_usuario;
    function __construct()
    {
        echo 'En App';

        if (isset($_GET) && !empty($_GET)) {
            $this->_usuario = new Usuario($_GET['nombre'], $_GET['telefono']);

            echo "$this->_usuario";
        }
    }
}
