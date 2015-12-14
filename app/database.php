<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 18:27
 */

namespace App;


use \PDO;

class database
{

    private $dbname;
    private $user;
    private $pass;
    private $host;
    private $pdo;

    public function __construct($dbname, $user = "root", $pass = "1992maxime", $host = "lcoalhost")
    {
        $this->dbname       = $dbname;
        $this->user         = $user;
        $this->pass         = $pass;
        $this->host         = $host;
    }

    private function getPDO()
    {
        if($this->pdo === null)
        {
            $pdo = new PDO('mysql:dbname=gameshop;host=localhost', 'root', '1992maxime');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;

        }
        return $this->pdo;
    }

    public function query($statement, $class_name)
    {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    public function prepare($statement, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one)
        {
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }
}