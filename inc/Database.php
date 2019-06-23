<?php
  class Database
  {
      public function Connect(){
          return mysqli_connect("localhost","root","","cmpdb");
      }
  }

?>