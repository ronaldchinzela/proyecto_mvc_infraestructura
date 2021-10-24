<?php
     const BASE_URL = "http://localhost/SGTRT/";

     //función php para la zona horario
     date_default_timezone_set('America/Lima');

     //declarando variables globales para la conexión a la base de datos
     const DB_HOST = "localhost";
     const DB_NAME = "sistema";
     const DB_USER = "postgres";
     const DB_PASSWORD = "Ptab3gr5";
     const DB_CHARSET = "options='-c client_encoding=utf8'";

     //Deliminadores para decimal y millar Ejem. 24,1989.00
     const SPD = ",";
     const SPM = ".";

     //variable para agregar simbolo de dolar
     const SMONEY = "$";

?>