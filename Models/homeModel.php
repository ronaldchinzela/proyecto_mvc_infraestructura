<?php
    //creando el modelo correspondiente al home del controlador
     class homeModel extends Postgresql
     {
        //método constructor de la clase
        public function __construct()
         {
            parent::__construct();
         }

         //concatenando los métodos de Libraries/Core/Postgresql.php y uniendolo con los métodos de Controllers/Home.php

         //invocando al método insertar de Controllers/Home.php
         public function setUser(string $nombre, int $edad)
         {
             $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
             $arrData = array($nombre, $edad);
             $request_insert = $this->insert($query_insert,$arrData);
             return $request_insert;  
         }

         //invocando al método buscar de Controllers/Home.php
         public function getUser($id)
         {
             $sql = "SELECT * FROM usuario WHERE id = $id ";
             $request = $this->select($sql);
             return $request;  
         }

         //invocando al método actualizar de Controllers/Home.php
         public function updateUser(int $id, string $nombre, int $edad)
         {
             $sql = "UPDATE usuario SET nombre =?, edad =? WHERE id = $id ";
             $arrData = array($nombre, $edad);
             $request = $this->update($sql, $arrData);
             return $request;  
         }

         //invocando al método para obtener todos los registros de Controllers/Home.php
         public function getUsers()
         {
             $sql = "SELECT * FROM usuario ";
             $request = $this->select_all($sql);
             return $request;  
         }

        //invocando al método para eliminar un registro de Controllers/Home.php
        public function delUser($id)
        {
            $sql = "DELETE FROM usuario WHERE id = $id";
            $request = $this->delete($sql);
            return $request;  
        }

     }
?>