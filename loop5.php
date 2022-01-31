<?php
    abstract class Project
    {
    abstract function conn();
    }
    class Data extends Project
    {
    function conn()
    {
    $conn = mysqli_connect("localhost","root","");
    return $conn;
    }
    function dataBase($dName)
    {
    $con = $this->conn();
    if(mysqli_select_db($con,$dName)) {
    echo "database exist";
    }
    else {
    $dataBase = "create database $dName";
    $query = mysqli_query($con,$dataBase);
    if($query) {
    echo "ok";
    }else {
    echo "not";
    }
    }
    }
    }
    
    
    $ob = new Data;
    $ob->conn();
    $ob->dataBase("p");
    
    ?>
?>