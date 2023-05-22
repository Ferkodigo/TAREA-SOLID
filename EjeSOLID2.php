<?php

class Adulto {
    public function pago(){
        echo "Es mayor de edad puede pagar";
    }
}

class Niño extends Adulto{
    public function pago()
    {
        throw new Exception("el niño no puede pagar, porque es menor de edad");
    }
}
?>

<?php

/**Lo resolvemos si aplicamos el principio Open-Closed que indica que las 
clases están abiertas a extensiones y cerradas a modificaciones */

interface Cliente{
    public function pago();
}
class Adulto implements cliente{
    public function pago(){
    }
}
class Niño implements cliente{
    public function pago()
    {
        throw new Exception("el niño no puede pagar, porque es menor de edad");
    }
}
?>