<?php 

    include 'db.php';  
    include 'config.php';
    include 'function.php';

    $db = new database();

    if(isset($_GET['ID'])){

        $id = $_GET['ID'];

        $query = "SELECT * FROM post WHERE ID='$id'";

        $post = $db->select($query);

        $row = $post->fetch_array();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="content">
        <div class="header">
            
        </div>
        <div class="row">
           
                <div class="blog_post">
                    <h2 class="blog_post_title">
                        <?php echo $row['post_title']; ?>
                    </h2>
                    <p class="blog_post_meta">
                        <?php echo formatDate($row['post_date']); ?> by <a href="#"> <?php echo $row['post_author']; ?></a>
                    </p>
                    <p class="blog_post_image">
                        <?php echo $row['post_image']; ?> 
                    </p>
                    <p class="blog_post_content">
                        <?php echo $row['post_content']; ?> 
                    </p>
                </div>
          
        </div>
    </div>
</body>
</html>