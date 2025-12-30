<?php

    $filePath = "./orders.json";

    if (!file_exists($filePath)) {
        echo "No orders yet.";
        exit;
    }

    $json = file_get_contents($filePath);
    $orders = json_decode($json, true);

    if (!is_array($orders)) {
        echo "Orders file is corrupted.";
        exit;
    }
    $orders = array_reverse($orders);
?>



<ul>
    <?php foreach ($orders as $index => $order): ?>
        <li>
            <strong>Order #<?= $index + 1 ?></strong><br>
            Name: <?= htmlspecialchars($order["firstName"]) ?>
            <?= htmlspecialchars($order["lastName"]) ?><br>
            Email: <?= htmlspecialchars($order["email"]) ?><br>
            Phone: <?= htmlspecialchars($order["tel"]) ?><br>
            Address: <?= htmlspecialchars($order["address"]) ?><br>
            Coffee: <?= htmlspecialchars($order["order-item"]) ?><br>
            Cake: <?= htmlspecialchars($order["order-extra"]) ?><br>
            Order type: <?= htmlspecialchars($order["order-type"]) ?><br>
            Date: <?= htmlspecialchars($order["date"]) ?>
        </li>
    <?php endforeach; ?>
</ul>