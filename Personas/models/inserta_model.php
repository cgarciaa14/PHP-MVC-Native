<?php



class inserta_model{
    private $db;
    private $personas;

            
    public function _constructor(){
        $this->db= Conectar::conexion();
        $this->personas=array();
    }
    
    public function post_personas(){
         $consulta=$this->db->query("CALL spd_consulta_personas()");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
        
        }
    
}
?>
