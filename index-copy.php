<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$data = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        var BILLING_GetBilling = (transaction_id) => {
            fetch("http://localhost:8012/api/v1/billing/generate/", {
                    method: "POST",
                    body: JSON.stringify({
                        transaction_id: transaction_id,
                    }),
                    headers: {
                        "Content-type": "application/json; charset=UTF-8",
                    },
                })
                .then((response) => response.json())
                .then((result) => {
                    console.log(result)
                });
        };
        BILLING_GetBilling('5101702')
    </script>
</body>

</html>