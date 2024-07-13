<?php

namespace App\Supports;
use mysqli;

abstract class Database{

  private $host = HOST;
  private $user = USER;
  private $pass = '';
  private $db = DB;

  private $connection;



  /***
   * server connection
   */

  private function connection(){
    return $this-> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db) ;
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
  protected function create($sql)
  {
     $this -> connection() -> query($sql);
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
