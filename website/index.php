<html>

<head>
<title> My shop222 </title>
</head>

<body>
<h1> Welcome </h1>

<u1>
<?php

$json = file_get_contents('http://product-service');
$obj = json_decode($json);
$products = $obj->products;
foreach ($products as $product) {
echo "<li>$product</li>";
}

?>

</u1>
</body>
</html>
