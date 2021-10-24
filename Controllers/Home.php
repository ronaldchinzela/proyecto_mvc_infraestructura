<?php
     class Home extends Controllers{
        public function __construct()
         {
            parent::__construct();
         }
         public function home()
         {
            $data['page_id'] = 1;
             $data['page_tag'] = "Home";
             $data['page_title'] = "Página principal";
             $data['page_name'] = "home";
             $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid doloremque ea facere maxime eius quas, nemo quod quia natus! Iste aliquam nihil voluptatum.";
             $this->views->getView($this,"home", $data);
         }

         //método insertar
         public function insertar()  
         {
            $data = $this->model->setUser("Lorena",30);
            $data = $this->model->setUser("Natalia",22);
            print_r($data);
         }

         //método buscar
         public function verusuario($id)  
         {
            $data = $this->model->getUser($id);
            print_r($data);
         }

         //método actualizar
         public function actualizar()  
         {
            $data = $this->model->updateUser(1,"Erika",23);
            print_r($data);
         }

         //método para obtener todos los registros
         public function verusuarios()
         {
            $data = $this->model->getUsers();
            print_r($data);
         }
         
         //método para eliminar un registro
         public function eliminarUsuario($id)
         {
            $data = $this->model->delUser($id);
            print_r($data);
         }
     }
?>