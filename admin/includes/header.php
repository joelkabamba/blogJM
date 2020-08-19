<?php 

    include 'db.php';  
    include 'config.php';
    include 'function.php';

    $db = new database();

    $query = "SELECT * FROM post order by ID DESC";

    $posts = $db->select($query);

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
        <div class="row">
            <?php while($row = $posts->fetch_array()): ?>
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
                        <?php echo substr($row['post_content'],0,200); ?> 
                    </p>
                    <a class="readmore" href="single.php?id=<?php echo $row['ID']; ?>">Lire la suite</a>
                </div>
            <?php endwhile; ?>
        </div>
        <a href="posts.php?source=add_new"> Add post</a>
    </div>
</body>
</html>