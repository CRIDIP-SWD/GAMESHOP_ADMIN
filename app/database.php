<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 18:27
 */

namespace App;

class database
{

    private $dbname;
    private $user;
    private $pass;
    private $host;
    private $db;

    public function __construct($dbname, $user = "root", $pass = "1992maxime", $host = "lcoalhost")
    {
        $this->dbname       = $dbname;
        $this->user         = $user;
        $this->pass         = $pass;
        $this->host         = $host;
    }

    private function getDB()
    {
        if($this->db === null)
        {
            $db = mysql_connect($this->host, $this->user, $this->pass)or die(mysql_error());
            $db .= mysql_select_db($this->dbname)or die(mysql_error());

        }
        return $this->db;
    }


}