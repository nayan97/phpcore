<?php 


class A {

    public function info() {
        return 'I am from info';
    }

    public function warning() {
        return 'I am from warning';
    }


    public function danger() {
        return 'I am from danger';
    }


}

class B extends A {


}


$b = new B;

echo $b->info();



?>




<!-- constractor and distructor lithen start i last 40 minutes -->


