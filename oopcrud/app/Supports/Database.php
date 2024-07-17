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

  protected function all($table, $order = 'DESC')
  {
    return $this -> connection() -> query("SELECT * FROM {$table} ORDER BY id {$order} ");
  }


  /**
   * find a data
   */
  protected function find($table, $id)
  {
    $data = $this -> connection() -> query("SELECT * FROM {$table} WHERE id = {$id} ");

    return $data ->fetch_object();
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
  protected function update($table, $id)
  {
    $this -> connection() -> query("UPDATE FROM $table WHERE id = {$id}");
  }

  /**
   * delate data
   */
  protected function delete($table, $id)
  {
    $this -> connection() -> query("DELETE FROM $table WHERE id = {$id}");
  }


}
?>
