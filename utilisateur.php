<?php
/**
 * Created by PhpStorm.
 * User: jdelagorce
 * Date: 17/10/14
 * Time: 12:05
 */

namespace gestionCommande;


class user {

    private $id;
    private $nom;
    private $prenom;
    private $mdp;
    private $dateCreation;
    private $idRole;

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    public function createUser($newNom, $newPrenom, $newMdp, $newRole)
    {
        if(!empty($newNom) && !empty($newMdp) && !empty($newPrenom) && !empty($newRole) ){
            $field = array('Id','Nom','Prenom','mdp','Date_creation','Id_Role');
            $newMdp = md5($newMdp);
            $dateCreation = date('Y-m-d');
            $data = array('','\''.$newNom.'\'','\''.$newPrenom.'\'','\''.$newMdp.'\'',$dateCreation,$newRole);
            $table = 'user';
            insertData($field,$data,$table);
            echo 'ça semble ok';
        }
        return false;
    }
    public function updateUser($newNom, $newPrenom,$newMdp,$newRole){
        if(!empty($newNom) && !empty($newMdp) && !empty($newPrenom) && !empty($newRole) ){
            $field = array('Id','Nom','Prenom','mdp','Id_Role');
            $newMdp = md5($newMdp);
            $data = array('','\''.$newNom,$newPrenom.'\'','\''.$newMdp.'\'',$newRole);
            $table = user;
            updateData($field,$data,$table);
        }
    }

} 