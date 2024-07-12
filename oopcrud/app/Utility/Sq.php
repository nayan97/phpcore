<?php

namespace App\Utility;

class Sq{

    public static function msg($msg, $type = 'danger'){
        return "<P class=\"alert alert-{$type} \">{$msg}</P>";
    }
}   