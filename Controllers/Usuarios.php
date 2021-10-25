<?php
     class Usuarios extends Controllers{
        public function __construct()
         {
            parent::__construct();
         }
         public function Usuarios()
         {
             $data['page_tag'] = "Usuarios"; //nombre de la pestaña de navegación
             $data['page_title'] = "Gestionar usuario"; //título del formulario
             $data['page_name'] = "usuarios"; 
             $this->views->getView($this,"usuarios", $data);
         }
     }
?>
