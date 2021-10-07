<?php


class CDataBase {
    private $server = '127.0.0.1';
    private $user = 'mysql';
    private $pass = 'mysql';
    private $db = 'ammo';
    private $mysqli = null; //Готовое подключение

    function __construct()
    {
        $connect = new mysqli($this->server, $this->user, $this->pass, $this->db);

        if (!empty($connect->connect_errno)) {
            die('Error: Data base connect error (' . $connect->connect_errno . ') ' . $connect->connect_error);
        }

        $this->mysqli = $connect;
    }

    public function selectAll($tableName)
    {
        $sqlQuery = 'SELECT * FROM ' . $tableName;
        $obj = $this->mysqli->query($sqlQuery);

        if (!empty($this->mysqli->error_list))
        {
            die('Error: Data base error (' . $this->mysqli->errno . ') ' . $this->mysqli->error);
        }

        $result = array();
        while ($row = $obj->fetch_assoc())
        {
            $result[] = $row;
        };

        return $result;
    }


    public function selectAllTwo($tableName1, $tableName2)
    {
        $sqlQuery = 'SELECT * FROM '. $tableName1. ' UNION ALL SELECT * FROM '. $tableName2;
        $obj = $this->mysqli->query($sqlQuery);

        if (!empty($this->mysqli->error_list))
        {
            die('Error: Data base error (' . $this->mysqli->errno . ') ' . $this->mysqli->error);
        }

        $result = array();
        while ($row = $obj->fetch_assoc())
        {
            $result[] = $row;
        };

        return $result;
    }


    public function AddAmmo($ammo, $name, $damage, $penetration, $speed)
    {
        $sqlQuery = 'INSERT INTO `'. $ammo. '` (`id`, `Name`, `Damage`, `Penetration power`, `Speed`) VALUES (NULL, \''.
            $name. '\', \''. $damage. '\', \''. $penetration. '\', \''. $speed. '\')';
        $this->mysqli->query($sqlQuery);
    }


    public function DelAmmo($ammo, $id)
    {
        $sqlQuery = 'DELETE FROM `'. $ammo. '` WHERE `'. $ammo. '`.`id` = '. $id. '.';
        $this->mysqli->query($sqlQuery);
    }

}

$CDataBase = new CDataBase;