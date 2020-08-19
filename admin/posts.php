<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h2>Add post</h2>
     <form enctype="multipart/form-data" action="includes/add_post.php" method="post">
         <input type="text" name="post_title" placeholder="title"><br>
         <input type="text" name="post_author" placeholder="author"><br>
         <input type="date" name="post_date" placeholder="date"><br>
         <input type="file" name="post_image"><br>
         <textarea name="post_content" cols="30" rows="10" placeholder="contenue"></textarea><br>
         <input type="submit" name="submit" value="publier">
     </form>
</body>
</html>