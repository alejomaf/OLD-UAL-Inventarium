<?php

//----------COMPROBACIÓN DEL USUARIO CONECTADO----------\\
include "../../connection/checkLogin.php";
include "../utilities/consultas.php";
//-------------------------------------------------------\\

$busqueda="";


anadirAConsultaNumero("cantidad","cantidad");
anadirAConsultaTexto("nombre","nombre");
anadirAConsultaTexto("imagen","imagen");
anadirAConsultaTexto("marca","marca");
anadirAConsultaTexto("modelo","modelo");
anadirAConsultaNumero("cantidadDisponible","cantidadDisponible");


mostrarDatos("grupoobjetos", $busqueda, $conn);
?>