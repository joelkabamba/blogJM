<?php

include_once "../class/Posts.php";
include_once "../class/database.php";

$post = new Posts;


    if(isset($_POST['submit'])){

          $title = $_POST['post_title'];
          $author = $_POST['post_author'];
          $date = $_POST['post_date'];
          $content = $_POST['post_content'];
          $post_status = $_POST['post_status'];

            if(isset($_FILES['post_image'])){

            $uploaddir = '../';

            $uploadfile = $uploaddir . basename($_FILES['post_image']['name']);

              if(move_uploaded_file($_FILES['post_image']['tmp_name'], $uploadfile)){

                  echo "image charger";

              }else{
                  echo "image echec <br>";
              }

            }
          $data = [$title, $content, $uploadfile, $date, $author, $post_status];

          $run = $post->addPost($data);
          
          if($run){

            echo "enregistrement ok";

          }
          echo "enregistrement echouer";
              
      }

?>