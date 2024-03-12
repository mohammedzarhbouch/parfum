
<?php
require_once '../back-end/getList.php';
$productList = getList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="test.js"></script>
</head>
<body>
    <div class="header-container">
        <div class="link-container-left">
            <a class="test1">
                <i class="fa-solid fa-2x fa-ranking-star"></i>
            </a>
            
        </div>
        <div class="company-name">Ode Fragrance</div>
        <div class="link-container-right">
            <ul>
                <li>
                    <a class="right-box">
                        <i class="fa-regular fa-rectangle-list"></i>
                    </a>
                </li>

                <li>
                    <a class="right-box">
                        <i class="fa-regular  fa-user"></i>
                    </a>
                </li>

                <li>
                    <a class="right-box">
                        <i class="fa-regular fa-heart" id="heartIcon" ></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="container">
        
        <div class="item-container">
            <?php
              $box = ''; // Initialize $box here
              foreach ($productList as $key => $row) {
                  $box .= '<div class="product-container">'; // Start individual product container
              
                  $box .= '<div class="product-content-container">'; // Start container for product content
              
                  $box .= '<div class="product-image">';
                  $box .= '<img class="afbeeldingen" src="../assets/' . $row['foto_url'] . '" />';
                  $box .= '</div>';
              
                  $box .= '<div class="product-details">';
                  $box .= '<h3>' . $row['brand_name'] . ' ' . $row['product_name'] . '</h3>';
                  $box .= '<h2> €' . $row['price'] . '</h2>';
                  $box .= '</div>';
              
                  $box .= '</div>'; // End container for product content
              
                  $box .= '</div>'; // End individual product container
              }
              
              $box .= '</div>'; // End the container for all products
              print $box;
            ?>
        </div>
    </div>
</body>
</html>