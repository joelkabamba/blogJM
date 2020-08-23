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
