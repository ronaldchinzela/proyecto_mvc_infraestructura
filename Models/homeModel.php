<?php
    //creando el modelo correspondiente al home del controlador
     class homeModel extends Postgresql
     {
        //método constructor de la clase
        public function __construct()
         {
            parent::__construct();
         }

         public function setUser(string $nombre, int $edad)
         {
             $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
             $arrData = array($nombre, $edad);
             $request_insert = $this->insert($query_insert,$arrData);
             return $request_insert;  
         }
     }
?>