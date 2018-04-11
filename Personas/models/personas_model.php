<?php
class personas_model{
    private $db;
    private $personas;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("CALL spd_consulta_personas()");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
    
    public function post_persona(){
        $consulta=$this->db->query("CALL spd_inserta_personas('name', 'name2', 'name3')");
    }
}
?>

