<?php 
// Documentacion usada para este apartado: https://www.softwaretestinghelp.com/php/php-arrays/

$socios = array(
    "socio1" => array(
        "id" => "socio1",
        "name" => "Juan",
        "surname" => "Gonzales",
        "dni" => "1234738A",
        "email" => "juan.gonzales@example.com",
        "phone" => "555-48262",
        "payments" => array (
            "2025-01" => array(
                "month" => "January",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-02-02",       
            ),
            "2025-02" => array(
                "month" => "February",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
            "2025-03" => array(
                "month" => "March",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-04-02",       
            ),
            "2025-04" => array(
                "month" => "April",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
            "2025-05" => array(
                "month" => "May",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-06-02",       
            ),
            "2025-06" => array(
                "month" => "June",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
            "2025-07" => array(
                "month" => "July",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-07-02",       
            ),
            "2025-08" => array(
                "month" => "August",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
            "2025-09" => array(
                "month" => "September",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-09-02",       
            ),
            "2025-10" => array(
                "month" => "October",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
            "2025-11" => array(
                "month" => "November",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-12-02",       
            ),
            "2025-12" => array(
                "month" => "December",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            ),
        )
    ),
    "socio2" => array(
        "id" => "socio2",
        "name" => "Maria",
        "surname" => "Lopez",
        "dni" => "1248728A",
        "email" => "maria.lopez@example.com",
        "phone" => "555-781256",
        "payments" => array (
            "2025-01" => array(
                "month" => "January",
                "amount" => 20.40,
                "status" => "Paid",
                "payment_date" => "2025-02-02",       
            ),
            "2025-02" => array(
                "month" => "February",
                "amount" => 24.40,
                "status" => "Pending",
                "payment_date" => null,       
            )
        )
    )
);
?>