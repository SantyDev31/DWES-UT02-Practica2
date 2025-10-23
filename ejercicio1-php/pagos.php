<?php 
/*
Documentacion usada para este apartado: https://www.softwaretestinghelp.com/php/php-arrays/

PHP Indexed Arrays
An indexed array is an array with a numeric index. The important point to remember is that the index starts with zero, not 1.
There are two methods to create an indexed array.
Method 1: By assigning the index automatically.
Syntax:
$var = array (value1, value2, value3,...);
Alternatively, you may use the following syntax:
$var = [value1, value2, value3,...];

*/

// PHP Associative Arrays
// An associative array is an array with numeric keys. There are two methods to create an associative array.
// Method 1: By assigning the index automatically.
// Syntax:
// $var = array (key1 => value1, key2 => value2, key3 => value3,...);
// Alternatively, you may use the following syntax:
// $var = [key1 => value1, key2 => value2, key3 => value3,...];

# PHP Multidimensional Arrays
# A multidimensional array contains one or more arrays.
# Syntax:
# $var = array
# (
# array(key1 => value1, key2 => value2, key3 => value3,...),
# array(key1 => value1, key2 => value2, key3 => value3,...),
# array(key1 => value1, key2 => value2, key3 => value3,...),
# ...
#)


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