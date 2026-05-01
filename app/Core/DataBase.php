<?php

namespace App\Core;

use App\Core\Config;

class DataBase
{
    private static $db = null;
    private $config;
    private $mysqli;

    public function __construct()
    {

        $this->mysqli = new \mysqli(
            Config::$db_host,
            Config::$db_user,
            Config::$db_password,
            Config::$db_name
        );

        $this->mysqli->set_charset('utf8mb4');
    }

    static public function getDB()
    {
        if (self::$db == null) self::$db = new DataBase();
        return self::$db;
    }

    public function select($query)
    {
        $result_set = $this->mysqli->query($query);

        return $this->resultSetToArray($result_set);
    }
    public function selectRow($query)
    {
        $result_set = $this->mysqli->query($query);
        if ($result_set->num_rows != 1) return false;
        return $result_set->fetch_assoc();
    }
    public function selectCell($query)
    {
        $result_set = $this->mysqli->query($query);
        if (!$result_set || $result_set->num_rows != 1) return false;
        $row = $result_set->fetch_assoc();
        mysqli_free_result($result_set);
        $row = array_values($row);
        return $row[0];
    }


    private function resultSetToArray($result_set)
    {
        $good = [];
        while (($row = $result_set->fetch_assoc()) != false) {
            $good[] = $row;
        }
        mysqli_free_result($result_set);
        return $good;
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
}
