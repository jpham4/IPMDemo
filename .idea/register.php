<?php include ('authenticate.php') ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\jpham\IdeaProjects\IPMDemo\bootstrap-4.1.0-dist\css">

    <title>IPM Register</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="register.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="register.php" class="form-group">
    <?php echo display_error(); ?>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password_1">
    </div>
    <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="password_2">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="register_btn">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>