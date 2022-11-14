<?php
require_once 'model/contactModel.php';
class ContactController{
    public function __construct(){
        $this->contactModel = new ContactModel();
    }
//index = viewmanager
    public function viewManager(){
        $view= isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'ajout':
                $this->includeView($view);
                break;
            case 'modification':
                $this->includeView($view);
                break;
            default:
            $this->includeView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])){
                    extract($_POST);    
                    $this->contactModel->inserer($tel, $prenom, $nom);
                    header("location:index.php");
                }
                break;
            case 'supprimer':
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                    $resultat = $this->contactModel->supprimer($id);
                    if($resultat){
                        header("location:index.php");
                    }
                }
                break;
            case 'modifier':
                if (isset($_POST['modif'])){
                    extract($_POST);    
                    $this->contactModel->modifier($tel, $prenom, $nom, $id);
                    header("location:index.php");
                }
                break;
            default:
                # code...
                break;
        }
        
    }
    public function includeView($page = "liste"){
        if($page == "liste"){
            $contacts = $this->contactModel->lister();
            include 'view/contact/'.$page.'.php';
        } else {
                if ($page == "modification" && isset($_GET['id'])){
                    $contact = $this->contactModel->findContactById($_GET['id']);
                    include 'view/contact/'.$page.'.php';
                }
                else{
                     include 'view/contact/'.$page.'.php';
                }
        }






        
        
    }
   
}

?>