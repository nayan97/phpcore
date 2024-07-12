<?php

namespace App\Supports;

class Validate {

    public static function msg($msg, $type = 'danger'){
        return "<P class=\"alert alert-{$type} \">{$msg}</P>";
    }
}   