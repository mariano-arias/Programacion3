<?php
class Usuario
{
  public $nombre;
  public $clave;
  public $mail;

  public function __construct($nombre, $clave, $mail)
  {
    $this->nombre=$nombre;
    $this->clave=$clave;
    $this->mail=$mail;
  }

  public function GetDatos(){
    return $this->nombre.", ".$this->clave.", ".$this->mail;
  }

  public static function UsuarioToCSV($user){
    $flag = false;
    
    $archivo=fopen('usuarios.csv','a+');
    if($archivo)
    {
        fputcsv($archivo, $user);
        $flag = true;
    }
    fclose($archivo);

  return $flag;
  }
}
?>