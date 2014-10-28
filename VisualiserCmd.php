<?php
/**
 * Created by PhpStorm.
 * User: jdelagorce
 * Date: 28/10/14
 * Time: 13:50
 */

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion Commande</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

</head>

<body role="document">

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Commande</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Extranet</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Accueil</a></li>
                <?php  if(!empty($_SESSION['role'])){ ?>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Commande <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="VisualiserCmd.php">Visualiser les commandes</a></li>
                            <li><a href="#">Ajouter une commande</a></li>
                        </ul>
                    </li>
                    <?php
                    if($_SESSION['role']==0 || $_SESSION['role']==1){

                    }
                    ?>
                    <li><a href="#contact">Gestion utilisateur</a></li>
                    <li><a href="deconnect.php">Déconnexion</a></li>
                <?php
                }
                ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>