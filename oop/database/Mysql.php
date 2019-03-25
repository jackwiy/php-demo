<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 2019/3/25
 * Time: 上午10:35
 */

namespace Database;

use PDO;
use PDOException;

/**
 * Class Mysql
 * @package Database
 */
class Mysql
{
    var $type     = 'mysql';
    var $host     = 'localhost';
    var $database = 'homestead';
    var $user     = 'homestead';
    var $password = 'secret';

    public function __construct()
    {
        try {

            $dsn = "$this->type:host=$this->host;dbname=$this->database";

            $mysql = new PDO($dsn, $this->user, $this->password);

            // set the PDO error mode to exception
            $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die('Error:' . $e->getMessage());
        }

        return $mysql;
    }

}