<?php
    require_once("Configuraciones/config.php");
//función empty para indicar si existe la variable enviada por la url, y con ! indicamos lo contrario
//para poder retornar a la página home cuando no se envíe ningun parámetro por la url
     $url = !empty($_GET['url']) ? $_GET['url']: 'home/home';
     //convirtiendo la variable $url en un array para capturar cada uno de los parámetros ingresados en los /
     $arrayUrl = explode("/", $url);
     //creando variable $controller y método que almacene la primera posición del array
     $controller = $arrayUrl[0];
     $method = $arrayUrl[0];
     $params = "";

    if(!empty($arrayUrl[1]))
    {
        if($arrayUrl[1] != "")
        {
            $method = $arrayUrl[1];
        }
    }
    if(!empty($arrayUrl[2]))
    {
        if($arrayUrl[2] != "")
        {
            for ($i=2; $i < count($arrayUrl); $i++){
                $params .= $arrayUrl[$i].',';
            }   
            $params = trim($params,',');    
        }
    }

    require_once("Libraries/Core/Autoload.php");
    require_once("Libraries/Core/Load.php");
    
?>