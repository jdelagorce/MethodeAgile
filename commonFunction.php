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

function insertData( $field, $data, $table)
{
    $i = 0;
    $q = "INSERT INTO ". $table ." (";
    while($i <= sizeof($field))
    {
        $q = $q . $field[i];
        if($i == sizeof($field))
        {
            $q = $q . ' , ';
        } else {
           $q = $q . ') ';
        }
    }
    $q = $q. 'VALUES (';
    $i = 0;
    while($i <= sizeof($data))
    {
        $q = $q . '\'' .$data[i]. '\'' ;
        if($i == sizeof($data))
        {
            $q = $q . ' , ';
        } else {
            $q = $q . '); ';
        }
    }
    echo $q;
    try
    {
        $bdd->exec($q);
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }

}

function updateData($field, $data, $table){
    $i = 1;
    $q = "UPDATE ". $table ." SET ";
    while($i <= sizeof($field))
    {
        $q = $q . $field[i] . ' = ' .$table[i];

    }
    $q = $q. 'WHERE id = '. $data[0].' ;';
    echo $q;

    try
    {
        $bdd->exec($q);
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }

}

function deleteData($table,$id){
    $q = "DELETE FROM ". $table ." WHERE id = ". $id;
    echo $q;
    try
    {
        $bdd->exec($q);
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }
}

function selectDetailData($table,$id){
    try
    {
        $reponse = $bdd->query('SELECT * FROM '.$table.' WHERE id = '.$id);
        return $reponse;
    }
    catch(Exception $e)
    {
        return false;
    }
}
function selectData($table){
    try
    {
        $reponse = $bdd->query('SELECT * FROM '.$table.';');
        return $reponse;
    }
    catch(Exception $e)
    {
        return false;
    }
}