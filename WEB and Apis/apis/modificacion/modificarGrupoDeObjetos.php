<?php

//----------COMPROBACIÓN DEL USUARIO CONECTADO----------\\
include "../../connection/checkLogin.php";
include "../utilities/modificaciones.php";
//-------------------------------------------------------\\
$modificacion="";

$idGrupoObjetos=$_POST["idGrupoObjetos"];

anadirAModificacionTexto("nombre", "nombre");
anadirAModificacionTexto("imagen", "imagen");
anadirAModificacionNumero("cantidad", "cantidad");
anadirAModificacionTexto("marca", "marca");
anadirAModificacionTexto("modelo", "modelo");
anadirAModificacionNumero("cantidadDisponible", "cantidadDisponible");

mostrarDatos("grupoobjetos", "idGrupoObjetos", $idGrupoObjetos, $conn);
?>