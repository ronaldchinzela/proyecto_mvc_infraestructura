<?php
     class Home extends Controllers{
        public function __construct()
         {
            parent::__construct();
         }
         public function home()
         {
            $data['page_id'] = 1;
             $data['tag_page'] = "Home";
             $data['page_title'] = "Página principal";
             $data['page_name'] = "home";
             $this->views->getView($this,"home", $data);
         }

         public function insertar()  
         {
            $data = $this->model->setUser("Ronald",25);
            print_r($data);
         }
     }
?>