<?php

    include '../model/Conexao.php';
    include '../model/Manager.php';

    $manager = new Manager();
    $id = $_POST['id'];

    if(isset($id) && !empty($id)) {
        $manager->delete_client($id);
        header("Location: ../index.php?cod=2");
    }

?>