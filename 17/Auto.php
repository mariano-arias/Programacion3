<?php
/* Arias Mariano
Aplicación Nº 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos privados:
_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)
Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:
i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.
Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.*/
class Auto
{
    private $_marca;
    private $_color;
    private $_precio;
    private DateTime $_fecha;

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
		if (method_exists($this,$funcion_constructor)) {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}

    //creo los constructores especificos
    function __construct_2($_marca, $_color)
    {
        $this->_marca= $_marca;
        $this->_color= $_color;
        $this->_precio = null;
        $this->_fecha = date_create('2020/01/01');

    }
    function __construct_3($_marca, $_color, $_precio)
    {
        $this->__construct_2($_marca, $_color);
        $this->_precio = $_precio;

    }
    function __construct_4($_marca, $_color, $_precio, $_fecha)
    {
        $this->__construct_3($_marca, $_color, $_precio);
        $this->_fecha = $_fecha;
    }

    function AgregarImpuestos ($var){
        $this->_precio+=$var;
    }

    static function MostrarAuto(Auto $car){
        echo "<br>Auto: <br>"."Marca: ".$car->_marca.", Color: ".$car->_color.", Precio: ". $car->_precio.", Fecha: ".$car->_fecha->format('d/m/Y');
    }

    function Equals(Auto $car2)
    {
        if ($this->_marca === $car2->_marca){
            return true;
        }
        return false;
    }

    static function Add(Auto $car1, Auto $car2){
        if($car1->Equals($car2) && ($car1->_color === $car2->_color)){
            return $car1->_precio + $car2->_precio;
        }
        else{
            echo "No se pudo realizar la operacion";
            return 0;
        }
    }
}
?>