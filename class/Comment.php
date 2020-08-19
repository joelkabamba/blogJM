<?php

    class Comment {

        private $con;

        public function __construct(){

            $this->con = new Databases;
        }

        public function addComments($id, $content){
            if(!empty($content)){
                $query = mysqli_query($this->con, "INSERT INTO comments VALUES('', '$content')");

                if(!$query){
                    die("Failed " . mysqli_error($this->con));
                }
            }else{
                return false;
            }
        }

        public function getComments(){
            $query = mysqli_query($this->con, "SELECT * FROM comments ORDER BY ID DESC");
            $str = "";

            while($row = mysqli_fetch_array($query)){

                $id = $row['ID'];
                $content = $row['content'];

                $str .= "<tr>
                         <td>$id</td>
                         <td>$content</td>
                        </tr>";

            }
        }

        
    }
?>