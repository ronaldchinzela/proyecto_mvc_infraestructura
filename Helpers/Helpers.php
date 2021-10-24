<?php
     //función para retornar la url del proyecto
     function base_url()
     {
         return BASE_URL;
     } 

     //función para mostrar los objetos del array de manera formateada
     function dep($data)
     {
         $format  = print_r('<pre>');
         $format .= print_r($data);
         $format .= print_r('</pre>');
         return $format;
     }
     
     //funciones para evitar inyecciones sql en los formularios
     function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena); //eliminando exceso de espacios entre palabras
        $string = trim($string); //eliminar espacios en blanco al inicio y al final
        $string = stripslashes($string); //eliminar los \ invertidos
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT¨* FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
     }

     //función para generar contraseña automáticamnte entre los distintos caracteres mostrados en la variable $cadena
     function passGenerator($Length = 10) //indicando la cantidad de caracteres que va tener el password
     {
         $pass = "";
         $longitudPass = $Length;
         $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789";
         $longitudCadena = strlen($cadena);

         for($i=1; $i<=$longitudPass; $i++)
         {
             $pos = rand(0,$longitudCadena-1);
             $pass .= substr($cadena, $pos,1);
         }
         return $pass;
    }

    //función para crear un token para restablecer la contraseña
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }

    //función para dar formato a las cantidades monetarias
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,3,SPD,SPM);
        return $cantidad;
    }
?>