<?php

    $host = 'localhost'; 
    $user = 'root';
    $password = ''; 
    $db_name = 'test';   

    $link = mysqli_connect($host, $user, $password, $db_name);
    
    

    if(mysqli_connect_errno())
    {
        echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    } 
    $table =  "CREATE TABLE Product
    (
        ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        PRODUCT_ID INT NOT NULL,
        PRODUCT_NAME VARCHAR(200) NOT NULL,
        PRODUCT_PRICE INT NOT NULL,
        PRODUCT_ARTICLE VARCHAR(200) NOT NULL,
        PRODUCT_QUANTITY INT,
        DATE_CREATE TIMESTAMP
    )"; 

    $sql = "SELECT * FROM `Product`";
    $result = mysqli_query($link,$sql);
    $product = mysqli_fetch_assoc($result);
?>





