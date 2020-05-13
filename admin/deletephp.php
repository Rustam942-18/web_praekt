<?php

        include '../app/connection.php';

        $id = $_GET['id'];

        $delete=$connection
             ->prepare("DELETE FROM new WHERE `id`=?");
        
        
        $delete->execute(
            [
                $id
            ]);

        if($delete)
        {
            header("Location:edit.php");
        }else
        {
            var_export($connection->errorInfo());
        }
?>