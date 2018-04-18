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
<form method="post" action="register.php" class="form-group">
    <?php echo display_error(); ?>
    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password_1" placeholder="Password" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword2" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword2" class="form-control" name="password_2" placeholder="Confirm Password" required autofocus>
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