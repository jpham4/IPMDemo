<?php
include("authenticate.php");?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\jpham\IdeaProjects\IPMDemo\bootstrap-4.1.0-dist\css">

    <title>Transactions</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="transactions.css" rel="stylesheet">
</head>
<body>
<h2>Stocks</h2>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped table-sm">
        <thead>
        <tr>
            <th>Tickers</th>
            <th>Asset Name</th>
            <th>Type</th>
            <th>Value</th>
        </tr>
        </thead>
        <?php $view_stock_query = "SELECT * FROM Assets WHERE type ='stock'";
        $show = mysqli_query($db, $view_stock_query);
        while ($row = mysqli_fetch_array($show)) {
            $tickers = $row[0];
            $asset_name = $row[1];
            $type = $row[2];
            $value = $row[3];
            ?>
            <tr>
                <!-- Showing results in the table -->
                <td><?php echo $tickers; ?></td>
                <td><?php echo $asset_name; ?></td>
                <td><?php echo $type; ?></td>
                <td><?php echo $value; ?></td>
            </tr>

        <?php } ?>
    </table>
</div>
</body>
</html>
