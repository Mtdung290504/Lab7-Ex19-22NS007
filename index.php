<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data
$cat_id = 1;

// Get the products
$products = get_products_by_category($cat_id);


/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Fender Telecaster';
$product_id = get_product_id_by_name($product_name);
$change = delete_product($product_id);
// Delete the product and display an appropriate messge
$delete_message = $change == 0 ? ("There are no products named: ".$product_name) 
                               : ("Deleted products named: ".$product_name);

/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'tele';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';

// Insert the data
add_product($category_id, $code, $name, $description, $price, 10.00);
// Display an appropriate message
$insert_message = "Added the following products: ".$name.", ".$price."$";

include 'home.php';
?>