<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 19:04
 */

namespace App\product;

use App\database;
class categorie
{
    private static $table = 'categories';

    public static function getAll()
    {
        
        $sql = mysql_query("SELECT * FROM categories")or die(mysql_error());
        $datas = mysql_fetch_array($sql);
        return $datas;
    }

    public static function getId($id)
    {
        $sql = mysql_query("SELECT * FROM categorie
                            WHERE".self::$table." = ".$id)or die(mysql_error());
        $datas = mysql_fetch_array($sql);
        return $datas;
    }

}