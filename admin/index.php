<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
  <div class="content">
      <div class="header">
          <a href="index.php"><h1>Administration</h1></a>
      </div>
      <div class="sidebar">
          <nav class="">
            <a href="posts.php">Add Post</a>
            <a href="comment.php">Add comment</a>
            <a href="afficher.php">View blog</a>
            <a href="../auth/logout.php">Logout</a>
          </nav>
      </div>
      <div class="row">
            <table border="2">
                <thead>
                    <tr align="center">
                        <td colspan="4"><h1>Gestion de post</h1></td>
                    </tr>
                    <tr>
                        <th>Post id</th>
                        <th>Post titre</th>
                        <th>Post author</th>
                        <th>Post date</th>
                        <th>Post image</th>
                        <th>Post statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th></th>  
                      <th></th>  
                      <th></th>  
                      <th></th>
                    </tr>
                </tbody>
            </table>
      </div>
  </div>  
</body>
</html>