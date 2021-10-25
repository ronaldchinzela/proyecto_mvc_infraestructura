<?php
    class Nuevo_usuario extends Controllers{
        public function __construct()
            {
            parent::__construct();
            }
            public function Nuevo_usuario()
            {
                $data['page_tag'] = "Registrar Usuario";
                $data['page_title'] = "Nuevo usuario";
                $data['page_name'] = "nuevo_usuario";
                $this->views->getView($this,"nuevo_usuario", $data);
            }
        }
?>