<?php
 
class NotaVentaDAO {
 
    private $db;
    // constructor

    function __construct() {
        require_once 'modelo/Conexion/connectbd.php';
        // connecting to database

        $this->db = new DB_Connect();
        $this->db->connect();

    }
 
    // destructor
    function __destruct() {
 
    }
	




    public function addNotaVenta($tabla,$datos) { //regusu et no es

        require_once 'modelo/Conexion/connectbd.php';
          // connecting to database
          $this->db = new DB_Connect();
          $link=$this->db->connect();
          
            
            $result=mysqli_query($link,"INSERT INTO ".$tabla." (fecha,MontoTotal,estado,id_usuario) VALUES(now(),'".$datos["monto"]."',1,'".$datos["cliente"]."')");
            return $result;
           
      }

}
 
?>
