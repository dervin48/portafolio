<?php

class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=db4free.net;dbname=rivera_pcphp",
                        "dervin48",
                        "Guatemala1234@");

        $link->exec("set names utf8");

        return $link;

    }

}