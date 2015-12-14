<?php
/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 14/12/2015
 * Time: 15:07
 */

namespace App;


class app
{

}

class constante extends app{

    const HTTP       = "https://";
    const URL        = "vps221243.ovh.net/gameshop_admin/";
    const ASSETS     = "assets/";
    const NOM_SITE   = "Gameshop - Administration";

    /**
     * @param $dos array Permet de parser sous forme string le tableau array=$dos
     * @return string retourne un format standard de link HTML
     */
    private static function parseArray($dos)
    {
        return implode("/", $dos);
    }

    /**
     * @param array $dos Il permet d'envoyer à la fonction la liste des dossiers à parcourir sous forme de tableau
     * @param bool|true $assets Permet d'insérer de manière automatique le dossier 'assets'
     * @return string Suivant le bool $assets, il retourne la redirection sous format de lien(string)
     */
    public static function getUrl($dos = array(), $assets = true)
    {
        if($assets === true)
        {
            return static::HTTP.static::URL.static::ASSETS.static::parseArray($dos);
        }else{
            return static::HTTP.static::URL.static::parseArray($dos);
        }
    }

    public static function show($constante)
    {
        echo strtoupper($constante);
    }

}