<?php

class database {
    private static $instance = null 

    public static function execute($sql,$params_array){

        if(database::$instance==null){
            database::$instance = mysqli_connect('127.0.0.1','root','','exo') ;

        }


    }



}