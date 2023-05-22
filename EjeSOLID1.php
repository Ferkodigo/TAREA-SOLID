<?php

class Employee{

    public function saveEmployee(){
        return "The employee's information has been saved successfully.";
    }
    public function conection(){
        return "the connection to the database was successful";
    }
    public function reportByDepartament($departament){
        return "Information of all active employees in $department";
    }
}
?>

<?php

/**Lo resolvemos cuando aplicamos el principio Single Responsability que indica 
que cada clase es responsable de una sola tarea*/

class  ConexionDB{
    public function conecction(){
        return "conexion a la base de datos";
    }
}
class  reportByDepartament extends ConexionDB{
     public $departament;

     public function getdepartament($departament){
        return $this->departament = $departament;
     }
     public function saveEmployee(){
        $this->conecction();
     }
    }
?>
