<?php 
include 'connexion_bdd.php';

$resultatRecherche = $connexion->query('SELECT * FROM administrateur WHERE login ="' .$_POST['login']. '" AND mdp="' .$_POST['mdp']. '"');

if($ligne = $resultatRecherche->fetch())
 {
    session_start();
    $_SESSION['id_admin']=$ligne['id_admin'];
    $_SESSION['nom']=$ligne['nom'];
    $_SESSION['prenom']=$ligne['prenom'];
    $_SESSION['login']=$ligne['login'];
    $_SESSION['mdp']=$ligne['mdp'];
    header('location: ../accueil.php');
 }
 
 else
 {
     header('location: ../connexion.php');
 }

 $resultat->closeCursor();
?>
