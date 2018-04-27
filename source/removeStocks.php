<?php
include ("authenticate.php");?>

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
            <th>Remove Investment</th>
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
                <td class="text-center"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Remove</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Remove Investment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="removeStocks.php" class="form-group">
                    <?php echo display_error(); ?>
                    <div class="form-group">
                        <label for="inputAssetName">Enter name of asset</label>
                        <input type="text" id="inputAssetName" class="form-control" name="assetName" placeholder="Asset Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputQuantity">Enter quantity</label>
                        <input type="number" id="inputQuantity" class="form-control" name="quantity" placeholder="Qty." required autofocus>
                    </div>
                    <div class="form-group">
                        <a href=""><button type="submit" class="btn btn-danger">Remove</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>

