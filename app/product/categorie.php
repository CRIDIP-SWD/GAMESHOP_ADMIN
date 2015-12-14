<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 18:47
 */

namespace App\product;
use App\app;


class categorie extends product
{
    protected static $table = 'categories';

    public function getURL()
    {
        return 'index.php?view=categories&id='.$this->id;
    }
}