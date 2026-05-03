<?php

// 1. Llamada única al autoloader. 
require_once __DIR__ . '/vendor/autoload.php';

// 2. Importamos la clase usando el Namespace que definiste
use App\Usuario;

// 3. Instanciamos el objeto
$miUsuario = new Usuario();

// 4. Mostramos el resultado
echo "<h1>Prueba de Carga Automática</h1>";
echo $miUsuario->saludar();