<?php
/*
Arias Mariano
Aplicación Nº 20 (Registro CSV)
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/
include_once 'Usuario.php';

//$file='usuarios.csv';

if(isset($_POST['nombre']) && isset($_POST['clave']) && isset($_POST['mail']))
{
  $nombre = $_POST['nombre'];
  $clave = $_POST['clave'];
  $mail= $_POST['mail'];

  $usuario = new Usuario($nombre, $clave, $mail);

  $array = (array)$usuario;
  //var_dump($usuario);

    if(Usuario::UsuarioToCSV($array)){
        echo "Los datos han sido guardados";
    }
}
else
{
  echo "Error. Faltan datos";
}

?>