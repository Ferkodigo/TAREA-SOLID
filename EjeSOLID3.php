<?php

class Transferencia{
    public function tipoPago($tipo, $cantidad){
        if($tipo == "tarjetaCredito"){
            return "Usted va pagar $$cantidad con tarjeta de credito";
        }
        if($tipo == "payPal"){
            return "Usted va pagar $$cantidad por medio PayPal";
        }
    }
}
?>

<?php

/**Lo resolvemos por el principo de liskov substitution ya que es hacer una abstracción correcta para cada clase 
 * así poder utilizar todos los métodos necesarios para resolver la problemática. */

interface tipo{
    public function Transferencia();
}

interface Cantidad{
    public function Transferencia();
}

class Tarjetadecredito implements tipo{

    public function Transferencia(){
        return "usted va pagar $$cantidad con tarjeta de credito";
    }
}
class Paypal implements tipo{

    public function Transferencia(){
        return "usted va pagar $$cantidad por medio de PayPal";
    }
}
?>