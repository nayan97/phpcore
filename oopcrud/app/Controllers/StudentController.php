<?php 

namespace App\Controllers;

use App\Utility\Image;
use App\Supports\Database;

class StudentController extends Database {

   use Image;

      /**
       *  add a new student
       */

     public function addStudent($name, $email, $cell, $uname){

      $photo_name = 'avater.png';

      if($this->hasFile('photo')){

         $photo_name = $this -> move($_FILES['photo'], 'img/students/');
      }

        $this -> create("INSERT INTO students (name, email, cell, user, photo) VALUES ('$name', '$email', '$cell', '$uname','$photo_name')");
     }

      /**
       *  show All Student
       */

     public function showAllStudent(){
         return $this -> all('students');
     }

     /**
      * delete student
      */

      public function studentDell($delete_id){

         $this -> delete('students', $delete_id);

      }

      /**
       * singale Page Show
       */

      public function singalePageShow($id){
         return $this -> find('students', $id);
      }

    
}


?>