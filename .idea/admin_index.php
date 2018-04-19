<?php
include('authenticate.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\jpham\IdeaProjects\IPMDemo\bootstrap-4.1.0-dist\css">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2" href="admin_index.php">IPM</a>
    <ul class="navbar-nav px-2">
        <?php if (isset($_SESSION['user'])) : ?>
        <li>
            <a style="color: #ffffff;"><?php echo $_SESSION['user']['email']; ?></a>
            <small><i style="color: #ffffff;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></small>
        </li>
        <li>
            <a href="admin_index.php?logout='1'">Sign out</a>
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
                        <a class="nav-link active" href="admin_index.php">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transactions.php">
                            <span data-feather="trending-up"></span>
                            Transactions
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
                <h1 class="h2">Admin</h1>
            </div>
        </main>
    </div>
</div>

<h2>Users</h2>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped table-sm">
        <thead>
        <tr>
            <th>User ID</th>
            <th>User Email</th>
            <th>Delete User</th>
        </tr>
        </thead>
        <?php $view_users_query = "SELECT * FROM Account WHERE user_type='user'";
        $run = mysqli_query($db, $view_users_query);
        while ($row = mysqli_fetch_array($run)) {
            $user_id = $row[0];
            $user_email = $row[1];
            ?>
            <tr>
                <!-- Showing results in the table -->
                <td><?php echo $user_id; ?></td>
                <td><?php echo $user_email; ?></td>
                <td><a href="admin_index.php?del=<?php echo $user_id ?>">
                        <button class="btn btn-danger" name="delete_btn">Delete</button></a>
                </td>
            </tr>

        <?php } ?>
    </table>
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

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>
