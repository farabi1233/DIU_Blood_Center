<?php
function connect_db(){
    $con = mysqli_connect('localhost', 'root', '', 'diu_blood_center');
    return $con;
    }

?>