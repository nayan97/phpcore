<?php



class Student{

public $name ='Nayan Islam';
public $age =10;
public $skill ='MERN ';

public function info(){
  echo "I am {$this -> name}. I am {$this -> skill}Devolpoer and i am {$this -> age} years old";

}
public function devs(){
  echo "{$this -> info()}";

}
}


$stu = new Student;
$stu -> devs();