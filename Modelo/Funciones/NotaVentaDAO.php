<?php
 include 'tabla_temp.php';
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
          
            $consulta="INSERT INTO ".$tabla." (fecha,MontoTotal,estado,id_usuario) VALUES(now(),'".$datos["monto"]."',1,'".$datos["cliente"]."')";
            $result=mysqli_query($link,$consulta);
           

            $idventa= $this->obtenerultimoidventa();
        
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                ($producto['PRECIO']*$producto['CANTIDAD']);
                $consultar="INSERT INTO DetalleVenta (Cantidad,PrecioVenta,id_nota,id_producto)
                 VALUES('".$producto['CANTIDAD']."','".$producto['PRECIO']."',$idventa,'".$producto['ID']."')";
                mysqli_query($link,$consultar);
              
            }
           
           





            return $result;
           
      }




      public function obtenerultimoidventa(){
        require_once 'modelo/Conexion/connectbd.php';
        // connecting to database
        $this->db = new DB_Connect();
        $link=$this->db->connect();
        
          $query = "SELECT max(id) as id FROM  Nota_Venta  ";
          $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
      
          $json = 0;
          //$json =mysqli_num_rows($result);
          if(mysqli_num_rows($result)>0){
              //$json['cliente'][]=nada;
            while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
             $json=$line["id"];
            }
            
          }
          
          mysqli_close($link);
          return $json;


      }

}
 
?>
