<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
        <style>
            div{
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <center>
    <body >
   <form action="updatephp.php" method="POST">
   <!-- <div class="">        
            <lable>ID</lable>
            <input type="text" name="id">
            <br>
    </div>  -->
   <div class="">
            <label>Title</label>
            <input type="text" name="Title" value="">
            <br>
    </div>
    <div class="">  
            <label>Short</label>
            <input type="text" name="Short">
            <br>
    </div>
    <!-- <div class=""> 
            <lable>Content</lable>
            <textarea name="Content" cols="40" rows="10" placeholder="Content"></textarea>
            <br>
    </div> -->
    <!-- <div class=""> 
            <lable>Image</lable>
            <input type="file" name="Image" id="file"value="choose a photo" accept=".jpg, .jpeg, .png"/ >
            <br>
    </div> -->
    <div class="">   
            <lable>Time</lable>
            <input type="datetime-local" name="Time">
            <br>
    </div>
    <div class="">        
            <lable>Count</lable>
            <input type="text" name="count">
            <br>
    </div>        
            <button type="submit">Change</button>
        
    </form>
    </body>
    </center>
</html>