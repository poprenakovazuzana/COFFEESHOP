<?php

    // Collect user input
    $order = [
        "firstName"   => $_POST["fname"] ?? "",
        "lastName"    => $_POST["lname"] ?? "",
        "email"       => $_POST["email"] ?? "",
        "tel"         => $_POST["tel"] ?? "", 
        "address"     => $_POST["address"] ?? "",
        "date"        => $_POST["date"] ?? "",
        "order-type"   => $_POST["order-type"] ?? "",
        "order-item"   => $_POST["order-item"] ?? "",
        "order-extra"  => $_POST["order-extra"] ?? "",
    ];

    $filePath = "./orders.json";

    // Read existing orders
    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $list = json_decode($json, true);
        if (!is_array($list)) {
            $list = [];
        }
    } else {
        $list = [];
    }

    // Add new order
    $list[] = $order;

    // Save back to file
    file_put_contents($filePath, json_encode($list, JSON_PRETTY_PRINT));


?>



<div>
    <h1>Your order is sent successfully!</h1>
    <a href="/index.php">Back to home page</a>
</div>