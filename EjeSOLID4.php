<?php

interface exportarPDF{
    public function exportarPDF();
    public function exportarJSON();
    public function exportarText();
}
class BoletaPago implements exportDocument{
    public function exportarPDF()
    {
        return "su boleta de pago esta en PDF";
    }

    public function exportarJSON()
    {
        throw new exception("no se puede exportar en JSON");
    }

    public function exportarText()
    {
        throw new Exception("no se puede exportar en texto");
    }
}

?>


/* Lo resolvemos por el principo de Segregación de la Interfaz sugiere hacer interfaces que sean específicas para un tipo de cliente, es decir para una finalidad concreta */

<?php
interface exportarPDF{
    public function exportarPDF();
}

interface exportarJSON{
    public function exportarJSON();
}

interface exportarText{
    public function exportarText();
}

class BoletaPago implements exportDocument{
    public function exportarPDF()
    {
        return "Su boleta de pago esta en PDF";
    }
}

class Exportar implements exportarJSON{
    public function exportarJSON()
    {
        return "No se puede exportar JSON";
    }
}

class Exportar implements exportarText{
    public function exportarText()
    {
        return "No se puede exportar en texto";
    }

}

?>