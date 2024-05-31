<?php   

class GetModelo{

    static public function TraerInformacion($table){

    try {
        $ventana = Conexion::conectar()-> prepare("SELECT * FROM $table");
        $ventana -> execute();
        return $ventana ->fetchAll(PDO:: FETCH_CLASS);
       
    } catch (PDOException $e) {
       echo "Error de: " . $e -> getMessage();
    }
}


}