

<?php

class Teacher {



}

class Student{

public $name ='Nayan Islam';
public $age =10;
public $skill ='MERN Devolpoer';

public function info(){
  echo "I am Nayan Islam";


}
public function devs(){
  echo "I am a devs";


}

}

$teacher = new Teacher;
$stu = new Student;
echo $stu -> name;
echo $stu -> age;
echo $stu -> skill;
$stu -> info();

?>
