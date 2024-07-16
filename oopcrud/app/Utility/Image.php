<?php 

namespace App\Utility;

/**
 * iamge upload features
 */

trait Image{


    /***
     * file move
     */

    protected function move($file, $path){

        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];

        move_uploaded_file($file_tmp_name, $path . $file_name);

        return $file_name;
    }


    /**
     * file exists or not
     */

     protected function hasFile($name){
        if(!empty ($_FILES[$name]['name'])){
            return true;
        }else{
            return false;
        }
     }



}