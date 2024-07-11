<?php

namespace App\Support;
use mysqli;

abstract class Database{

private $host = 'HOST';
private $user = 'USER';
private $pass = 'PASS';
private $db = 'DB';
private $connection;



/***
 * server connection
 */

private function connection(){
  $this-> connection = new mysqli($this -> host, $this -> pass, $this -> user, $this -> db) ;
}





/**
 * get all data
 */
protected function all()
{
  # code...
}


/**
 * find a data
 */
protected function find()
{
  # code...
}
/**
 * create a data 
 */
protected function create()
{
  # code...
}
/**
 * update a data
 */
protected function update()
{
  # code...
}

/**
 * delate data
 */
protected function delete()
{
  # code...
}


}
?>
