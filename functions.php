<?php

$limit = 3; // введите количество выводивых товаров

function get_categories($link, $limit) {

   // $sql = "SELECT * FROM product LIMIT $limit";
   $sql = "SELECT * FROM `product` ORDER BY `product`.`DATE_CREATE` DESC LIMIT $limit";

    $result = mysqli_query($link, $sql);

    $products = mysqli_fetch_all($result, 1);
    return $products;

}

