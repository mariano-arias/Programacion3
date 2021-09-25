<?php
/*
Arias Mariano
Aplicación Nº 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:
_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:
i. La razón social.
ii. La razón social, y el precio por hora.
Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.*/
include "Auto.php";

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    function __construct()
	{
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
		//obtengo el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
		//cada constructor de un número dado de parámetros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct_'.$num_params;
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) { //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}

    function __construct_1($_razonSocial){
        $this->_razonSocial = $_razonSocial;
        $this->_precioPorHora=0;
        $this->_autos= array();
    }

    function __construct_2($_razonSocial, $_precioPorHora){
        $this->__construct_1($_razonSocial);
        $this->_precioPorHora = $_precioPorHora;
        $this->_autos = array();
    }

    function MostrarGarage (){
        echo $this->_razonSocial." - ".$this->_precioPorHora."<br>";
        echo "Autos: <br>";
        foreach($this->_autos as $val){
            Auto::MostrarAuto($val);
        }
    }

    function Equals(Auto $car)
    {
        foreach ($this->_autos as $val)
        {
            if ($val === $car){
                return true;
            }
        }
        return false;
    }

    function Add(Auto $car){
        if(!$this->Equals($car)){
            array_push($this->_autos, $car);
            return true;
        }
        else{
            echo "<br>No se pudo realizar la operacion, el auto YA está en el garage";
            return false;
        }
    }

    function Remove(Auto $car){
        if($this->Equals($car)){
            $aux = array_search($car, $this->_autos);
            unset($this->_autos[$aux]);
            return true;
        }
        else{
            echo "<br>No se pudo realizar la operacion, el auto NO está en el garage";
            return false;
        }
    }
}
?>