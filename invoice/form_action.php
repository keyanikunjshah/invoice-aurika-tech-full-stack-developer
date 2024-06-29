<?php
require_once("config.php");


// Ensure session variables are set
$B_name = isset($_SESSION['B_Name']) ? $_SESSION['B_Name'] : '';
$B_address = isset($_SESSION['B_Address']) ? $_SESSION['B_Address'] : '';
$B_city = isset($_SESSION['B_City']) ? $_SESSION['B_City'] : '';
$B_state = isset($_SESSION['B_State']) ? $_SESSION['B_State'] : '';
$B_zipcode = isset($_SESSION['B_Zipcode']) ? $_SESSION['B_Zipcode'] : '';

$Ship_name = isset($_SESSION['Ship_Name']) ? $_SESSION['Ship_Name'] : '';
$Ship_address = isset($_SESSION['Ship_Address']) ? $_SESSION['Ship_Address'] : '';
$Ship_city = isset($_SESSION['Ship_City']) ? $_SESSION['Ship_City'] : '';
$Ship_state = isset($_SESSION['Ship_State']) ? $_SESSION['Ship_State'] : '';
$Ship_zipcode = isset($_SESSION['Ship_Zipcode']) ? $_SESSION['Ship_Zipcode'] : '';
$Ship_pod = isset($_SESSION['pod']) ? $_SESSION['pod'] : '';

$S_name = isset($_SESSION['S_Name']) ? $_SESSION['S_Name'] : '';
$S_address = isset($_SESSION['S_Address']) ? $_SESSION['S_Address'] : '';
$S_city = isset($_SESSION['S_City']) ? $_SESSION['S_City'] : '';
$S_state = isset($_SESSION['S_State']) ? $_SESSION['S_State'] : '';
$S_zipcode = isset($_SESSION['S_Zipcode']) ? $_SESSION['S_Zipcode'] : '';

// Ensure item details are also set
$descriptions = isset($_SESSION['Item_Details']) ? $_SESSION['Item_Details'] : [];
$unit_prices = isset($_SESSION['Unit_Price']) ? $_SESSION['Unit_Price'] : [];
$quantities = isset($_SESSION['Quantity']) ? $_SESSION['Quantity'] : [];
$net_amounts = isset($_SESSION['Amount']) ? $_SESSION['Amount'] : [];
$tax_rates = isset($_SESSION['Tax']) ? $_SESSION['Tax'] : [];
$total_amounts = isset($_SESSION['Total']) ? $_SESSION['Total'] : [];
$discounts = isset($_SESSION['Discount']) ? $_SESSION['Discount'] : [];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .invoice-container {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .invoice-header, .invoice-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details, .item-table {
            width: 100%;
            margin-bottom: 20px;
        }
        .item-table th, .item-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: right;
        }
        .item-table th {
            background-color: #f8f8f8;
        }
        .item-table input {
            text-align: right;
        }
        .item-table .text-left {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container invoice-container">
    <div class="invoice-header">
        <h1>Invoice</h1>
    </div>
    <div class="row invoice-details">
        <div class="col-md-4">
            <h5>Billing Details</h5>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($B_name); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($B_address); ?></p>
            <p><strong>City:</strong> <?php echo htmlspecialchars($B_city); ?></p>
            <p><strong>State:</strong> <?php echo htmlspecialchars($B_state); ?></p>
            <p><strong>Zip Code:</strong> <?php echo htmlspecialchars($B_zipcode); ?></p>
        </div>
        <div class="col-md-4">
            <h5>Shipping Details</h5>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($Ship_name); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($Ship_address); ?></p>
            <p><strong>City:</strong> <?php echo htmlspecialchars($Ship_city); ?></p>
            <p><strong>State:</strong> <?php echo htmlspecialchars($Ship_state); ?></p>
            <p><strong>Zip Code:</strong> <?php echo htmlspecialchars($Ship_zipcode); ?></p>
            <p><strong>POD:</strong> <?php echo htmlspecialchars($Ship_pod); ?></p>
        </div>
        <div class="col-md-4">
            <h5>Seller Details</h5>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($S_name); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($S_address); ?></p>
            <p><strong>City:</strong> <?php echo htmlspecialchars($S_city); ?></p>
            <p><strong>State:</strong> <?php echo htmlspecialchars($S_state); ?></p>
            <p><strong>Zip Code:</strong> <?php echo htmlspecialchars($S_zipcode); ?></p>
        </div>
    </div>
    <table class="table item-table">
        <thead>
            <tr>
                <th>#</th>
                <th class="text-left">Description</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Discount</th>
                <th>Net Amount</th>
                <th>Tax Rate</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($descriptions)) {
                foreach ($descriptions as $index => $description) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td class='text-left'>" . htmlspecialchars($description) . "</td>
                            <td>" . htmlspecialchars($unit_prices[$index]) . "</td>
                            <td>" . htmlspecialchars($quantities[$index]) . "</td>
                            <td>" . htmlspecialchars($discounts[$index]) . "</td>
                            <td>" . htmlspecialchars($net_amounts[$index]) . "</td>
                            <td>" . htmlspecialchars($tax_rates[$index]) . "</td>
                            <td>" . htmlspecialchars($total_amounts[$index]) . "</td>
                          </tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <div class="invoice-footer">
        <button type="button" class="btn btn-primary" onclick="window.print();">Print</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
