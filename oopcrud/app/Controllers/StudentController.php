<?php 

namespace App\Controllers;

use App\Supports\Database;

class StudentController extends Database {

      /**
       *  add a new student
       */

     public function addStudent($name, $email, $cell, $uname){

        $this -> create("INSERT INTO students (name, email, cell, user) VALUES ('$name', '$email', '$cell', '$uname')");
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
    
}


?>