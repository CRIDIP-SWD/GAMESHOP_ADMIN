<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 18:49
 */

namespace App\product;

use App\app;
class product
{
    protected static $table;

    private static function getTable()
    {
        if(static::$table === null)
        {
            $class_name = explode('\\',get_called_class());
            static::$table = strtolower(end($class_name));

        }
        return static::$table;
    }

    public static function all()
    {
        return app::getDB()->query("
                      SELECT *
                      FROM ".static::getTable()."
                      "
            , get_called_class());
    }


    public function __get($key)
    {
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function find($id)
    {
        return app::getDB()->prepare("
                      SELECT *
                      FROM ".static::getTable()."
                      WHERE id = ?
                      "
            , [$id], get_called_class(), true);
    }
}