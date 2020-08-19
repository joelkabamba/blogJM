<?php

class Posts
{
    public static $pageno;
    public $totalPages;
    private $db;

    public function __construct()
    {
        $this->db = new Databases;
    }

    public function addPost(array $data)
    {
        $this->db->query("INSERT INTO post 
                            (post_title, post_content, post_image, post_date, post_author, post_status)
                            VALUES(?,?,?,?,?,?)");

        for ($i = 0; $i < count($data); $i++) {
            $this->db->bind(($i + 1), $data[$i]);
        }

        if ($this->db->execute()) {
            return true;
        }
        return false;
    }


    public function loadPosts()
    {
        $conn = mysqli_connect("localhost", "joel", "root1234", "ProjetJM");
        $recordPerPage = 5;
        $offset = (Posts::$pageno - 1) * $recordPerPage;
        $totalpages = "SELECT COUNT(*) FROM post WHERE post_status=true ORDER BY ID DESC";
        $result = mysqli_query($conn, $totalpages);
        $totalRows = mysqli_fetch_array($result)[0];
        $this->totalPages = ceil($totalRows / $recordPerPage);

        // get records from db
        $this->db->query("SELECT * FROM post WHERE post_status = true ORDER BY ID DESC LIMIT $offset, $recordPerPage");
        $data = $this->db->resultset();
        if ($this->db->rowCount() > 0) {
            return $data;
        }
        return false;
    }

    public function deletePost($id, $image)
    {
        $this->db->query("DELETE FROM post WHERE ID=?");
        $this->db->bind(1, $id);
        if ($this->db->execute()) {
            unlink($image);
            return true;
        }
        return false;
    }
}
