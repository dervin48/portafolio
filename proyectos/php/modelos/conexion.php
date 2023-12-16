<?php

class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=db-mysql-nyc3-81412-do-user-12715314-0.c.db.ondigitalocean.com:25060;dbname=defaultdb",
                        "doadmin",
                        "AVNS_2ui5xUPTroJCiadiA_-");

        $link->exec("set names utf8");

        return $link;

    }

}