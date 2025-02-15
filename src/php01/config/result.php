<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "お名前は、" . $name . "</br>";
$item = $_POST["item"];
if($item) {
    print "ご希望の商品は、" . $item."</br>";
} 
$orders = $_POST["orders"];
print "注文数は、" . $orders."</br>";
