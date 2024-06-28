<?php
    include '../model/Conexao.php';
    include '../model/Manager.php';

    $manager = new Manager();

    //var_dump($_POST);
    if(!empty($_POST)) {
        $manager->update_client($_POST);
        header("Location: ../index.php?cod=3");
    }