
<?php 
require_once('database.php');
require_once('functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCT_ID</th>
      <th scope="col">PRODUCT_NAME</th>
      <th scope="col">PRODUCT_PRICE</th>
      <th scope="col">PRODUCT_ARTICLE</th>
      <th scope="col">PRODUCT_QUANTITY</th>
      <th scope="col">DATE_CREATE</th>
    </tr>
  </thead>
  <tbody>
  <?php $products = get_categories($link, $limit); ?>
    <?php foreach($products as $product): ?>    
    <tr class="tr <?=$product["ID"]?>">    
      <th scope="row"><?=$product["ID"]?></th>
      <td><?=$product["PRODUCT_ID"]?></td>
      <td><?=$product["PRODUCT_NAME"]?></td>
      <td><?=$product["PRODUCT_PRICE"]?></td>
      <td><?=$product["PRODUCT_ARTICLE"]?></td>
      <td><?=$product["PRODUCT_QUANTITY"]?></td>
      <td><?=$product["DATE_CREATE"]?>   
      <button type="button" id="button" class="btn btn-light btn<?=$product["ID"]?>">Скрыть</button> 
      </td>      
    </tr>
    <script>
        $('.btn<?=$product["ID"]?>').on('click', function (){
        $('.<?=$product["ID"]?>').remove();	
        });        
  </script>
    <?php endforeach;?>
  </tbody>
</table>

</body>
</html>