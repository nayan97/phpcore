<?php

// All About for student

class Student{

public $name ='Nayan Islam';
public $age =10;
public $skill ='MERN ';

/**
 * info mathod for student info
 */
public function info(){
  echo "I am {$this -> name}. I am {$this -> skill}Devolpoer and i am {$this -> age} years old";

}
public function devs(){
  echo "{$this -> info()}";

}
public function food($food){
  echo "I love to eat {$food}";

}
}


$stu = new Student;
$stu -> food('veg');