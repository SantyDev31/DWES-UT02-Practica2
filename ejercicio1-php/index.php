<?php
    require 'pagos.php';
?>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        foreach($socios as $socio){
            echo "<div>";
            echo "<h2>Partner info {$socio["id"]}</h2>";
            echo "<p><strong>Name: {$socio["name"]} </strong></p>";
            echo "<p><strong>DNI: {$socio["dni"]} </strong></p>";
            echo "<p><strong>Address: We dont store that info </strong></p>";
            echo "<p><strong>Phone: {$socio["phone"]} </strong></p>";
            echo "<p><strong>Email: {$socio["email"]} </strong></p>";

            $total_amount = 0;
            echo "<h2>Partnert payments {$socio["id"]}</h2>";
            echo "<table>";
            foreach($socio["payments"] as $payment_id => $payment){
                echo "<tr><td colspan='2'>Payment {$payment_id}</td></tr>";
                echo "<tr><td>Month</td><td>{$payment["month"]}</td></tr>";
                echo "<tr><td>Amount</td><td>{$payment["amount"]}</td></tr>";
                echo "<tr><td>Status</td><td>{$payment["status"]}</td></tr>";
                
                if($payment["payment_date"] != null){
                    echo "<tr><td>Payment date</td><td>{$payment["payment_date"]}</td></tr>";
                    $total_amount += $payment["amount"];
                } else {
                    echo "<tr><td>Payment date</td><td class='notPaid'> - </td></tr>";
                }
            }
            echo "<tr><td>Total Amount Year:</td><td>{$total_amount}</td></tr>";
            echo "</table>";
            echo "</div>";
        }
    ?>
</body>
