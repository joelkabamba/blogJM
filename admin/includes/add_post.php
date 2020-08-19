<?php

    include 'db.php';  
    include 'config.php';
    include 'function.php';

    $db = new database();

    if(isset($_POST['submit'])){

          $title = $_POST['post_title'];
          $author = $_POST['post_author'];
          $date = $_POST['post_date'];
          $content = $_POST['post_content'];

            if(isset($_FILES['post_image'])){

            $uploaddir = '../';

            $uploadfile = $uploaddir . basename($_FILES['post_image']['name']);

              if(move_uploaded_file($_FILES['post_image']['tmp_name'], $uploadfile)){

                  echo "image charger";

              }else{
                  echo "image echec <br>";
              }

            }
        
          $query = "INSERT INTO post(post_title, post_content, post_image, post_date, post_author)VALUES('$title', '$content', '$uploadfile', '$date', '$author')";
        
          $run = $db->insert($query);
          
          if($run){

            echo "enregistrement ok";

          }
          echo "enregistrement echouer";
              
      }

?>