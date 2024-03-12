<?php
require_once 'connect.php';

function getList() {
    $sql = "SELECT product.*, brand.*, foto.*, target_audience.*, product.name AS product_name, product.price AS price
            FROM product, brand, foto, target_audience
            WHERE product.brand_id = brand.id
            AND product.foto_id = foto.id
            AND product.target_audience_id = target_audience.id";
    
    return getData($sql);
}

?>
