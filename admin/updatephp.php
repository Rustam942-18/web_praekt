<?php

        include '../app/connection.php';
          
        // $title=$_POST["Title"]; 
        // $short=$_POST["Short"]; 
        // $content=$_POST["Content"];
        //  $image=$_FILES["Image"];
        // $time=$_POST["Time"];
        // $count=$_POST["count"];
        // $id=$_POST["id"];

        if($_POST){
            // $name=uniqid();
            // $full_path = 'photos/'.$name.'.jpg';
            // move_uploaded_file($image["tmp_name"], $full_path);        
            
            $res=$connection
                ->prepare("UPDATE `new` SET 
                `Title`=?,`Short`=?,`Time`=?,`count`=? WHERE id=?")
                
                ->execute(array($_POST["Title"],$_POST["Short"],$_POST["Time"],$_POST["count"],$_POST["id"]));
            if($res){
                header("Location:edit.php");
            }else            {
                var_export($connection->errorInfo()); 
            }
        }
// $query=$connect->query("SELECT * FROM new");
// $list=$query->fetchAll();
        // $update=$connection
        //    ->prepare("UPDATE `new` SET 
        //    `Title`=?, `Short`=?, `Content`=?, `Image`=?, `Time`=?, `count`=? WHERE `id`=?");
        // $update->execute([
        //     $title,
        //     $short,
        //     $content,
        //     $full_path,
        //     $time,
        //     $count,
        //     $id
        // ]);
        // if($update)
        // {
        //     header("Location:edit.php");
        // }else   
        // {
        //     var_export($connection->errorInfo());
        //  }   
?>