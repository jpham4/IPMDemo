<?php include('authenticate.php');?>
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
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2" href="index.php">IPM</a>
    <ul class="navbar-nav px-2">
        <?php  if (isset($_SESSION['user'])) : ?>
        <li>
            <a style="color: #ffffff;"><?php echo $_SESSION['user']['email']; ?></a>
            <small><i  style="color: #ffffff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></small>
        </li>
        <li>
            <a href="index.php?logout='1'">Sign out</a>
        </li>
    </ul>
</nav>
<?php endif; ?>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="trending-up"></span>
                            Transactions <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Transactions</h1>
            </div>
        </main>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
    <div class="col-md-5 ml-md-auto col-sm-3 pt-5 px-2">
<div class="card">
    <h5 class="card-header">Add Investment</h5>
    <div class="card-body">
        <h5 class="card-title">Choose Investment Type</h5>
        <p class="card-text">Choose which type of investment type you would like to add.</p>
        <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect01" name="inputGroupSelect01">
                <option selected disabled>Select investment</option>
                <option value="AddStocks">Stocks</option>
                <option value="AddCrypto">Cryptocurrency</option>
            </select>
        </div>
        <div class="container">
        <button type="submit" class="btn btn-md btn-primary" onclick="addSelect()" value="Submit">Submit</button>
        </div>
    </div>
</div>
</div>
    <div class="col-md-5 ml-md-1 mr-2 col-sm-3 pt-5 px-2">
        <div class="card">
            <h5 class="card-header">Remove Investment</h5>
            <div class="card-body">
                <h5 class="card-title">Choose Investment Type</h5>
                <p class="card-text">Choose which type of investment type you would like to remove.</p>
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02" name="inputGroupSelect02">
                        <option selected disabled>Select investment</option>
                        <option value="RemoveStocks">Stocks</option>
                        <option value="RemoveCrypto">Cryptocurrency</option>
                    </select>
                </div>
                <div class="container">
                <button type="submit" class="btn btn-md btn-primary" onclick="removeSelect()" value="Submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="transactions.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>

