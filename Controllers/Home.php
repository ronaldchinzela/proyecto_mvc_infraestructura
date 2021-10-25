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
     }
?>