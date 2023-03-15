<?php

$db = mysqli_connect('localhost', 'root', 'Noolvidar19', 'appsalon');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "error de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
echo "conexion correcta";