<?php

namespace App\Supports;

class Validate {

    public static function msg($msg, $type = 'danger'){
        return "<P class=\"alert alert-{$type} \">{$msg}</P>";
    }


    /**
     * 
     * validate msg show
     */

     public static function show($msg) {

        echo $msg ?? '';
     }


    /***
     * 
     *  email validation
     */

    public static function email($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
}   