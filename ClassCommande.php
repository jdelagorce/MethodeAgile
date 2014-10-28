<?php
/**
 * Created by PhpStorm.
 * User: Gbaudouin
 * Date: 28/10/14
 * Time: 09:00
 */
namespace gestionCommande;

class Commande{

  public $libelle;
  public $date_deb;
  public $date_fin;
  public $personne;

    /**
     * @param mixed $personne
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }

    /**
     * @return mixed
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_deb
     */
    public function setDateDeb($date_deb)
    {
        $this->date_deb = $date_deb;
    }

    /**
     * @return mixed
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

  function InsertCommand($libelle, $date_deb, $date_fin,$Id_Statut, $Id_Typecommande){
      if (!empty($libelle) && !empty($date_deb) && !empty($Id_Statut) && !empty($Id_Typecommande)){
          $field = array('Id','date_debut','date_fin','libelle','Id_Statut','Id_Typecommande');
          $date_debut = date(Y-m-d);
          if(!empty($date_fin)){
              $date_fin = date(Y-m-d);
          }
          elseif($date_fin == '')
          {
              $date_fin = null;
          }
          $data = array('', $date_debut,$date_fin, $libelle, $Id_Statut, $Id_Typecommande);
          $table = 'commande';
          insertData($field, $data,$table);
      }
      return false;
  }

  function UpdateCommand($libelle, $date_deb, $date_fin, $Id_Statut, $Id_Typecommande){
      if($_SESSION['role']== 0 || 1)
      {
          $field = array('Id','date_debut','date_fin','libelle','Id_Statut','Id_Typecommande');
          $date_debut = date(Y-m-d);
          if(!empty($date_fin)){
              $date_fin = date(Y-m-d);
          }
          elseif($date_fin == '')
          {
              $date_fin = null;
          }
          $data = array('', $date_debut,$date_fin, $libelle, $Id_Statut, $Id_Typecommande);
          $table = 'commande';
          insertData($field, $data,$table);
      }
      $field = array('Id','date_debut','date_fin','libelle','Id_Typecommande');
      $date_debut = date(Y-m-d);
      if(!empty($date_fin)){
          $date_fin = date(Y-m-d);
      }
      elseif($date_fin == '')
      {
          $date_fin = null;
      }
      $data = array('', $date_debut,$date_fin, $libelle, $Id_Typecommande);
      $table = 'commande';
      insertData($field, $data,$table);
  }

    function SelectCommand(){
        $table = 'commande';
        selectData($table);
    }

} 
?>