<?php
require_once 'db.php';
 class ContactModel{
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function inserer($tel, $prenom, $nom){

        $queryPrepare = $this->db->ds->prepare("INSERT INTO contact(prenom, nom, tel) VALUES (?, ?, ?)");
        return $queryPrepare->execute(array($prenom,$nom,$tel));
    }
    public function modifier ($tel, $prenom, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE contact SET tel = ?, prenom = ?, nom = ? WHERE id = ?");
        return $query->execute(array($tel,$prenom,$nom,$id));
    }
    public function supprimer ($id){
        $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id =:idContact");
        $sql->bindValue(":idContact",$id);
        return $sql->execute();
    }
    public function lister(){
        $query = $this->db->ds->prepare("SELECT * FROM contact ORDER BY nom");
        $query->execute();
        return $query ->fetchall();
    }
    public function findContactById($id){
        $query = $this->db->ds->prepare("SELECT * FROM contact WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(); 
    }
    
 }

?>