<?php
/**
 * Created by PhpStorm.
 * User: jdelagorce
 * Date: 17/10/14
 * Time: 12:27
 */
require_once('connectBdd.php');

function encryptMd5($aCrypter){
   return md5($aCrypter);
}

function insertData( $data = array(), $table)
{
    $q = "INSERT INTO ". $table ." VALUES ";
    
}