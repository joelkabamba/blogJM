<?php 
    function formatDate($date){
        return date('j F Y, g:i a', strtotime($date));
    }
?>