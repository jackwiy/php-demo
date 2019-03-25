<?php

   /**
    * @return PDO
    */
   public function mysql()
   {
       try {
           
           $type     = 'mysql';
           $host     = 'localhost';
           $database = 'homestead';
           $user     = 'homestead';
           $password = 'secret';

           $dsn = "$type:host=$host;dbname=$database";

           $mysql = new PDO($dsn, $user, $password);

           // set the PDO error mode to exception
           $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           return $mysql;
       } catch (PDOException $e) {
           die('Error:' . $e->getMessage());
       }

   }

?>

	
