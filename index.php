<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap.min.js"></script>

</head>
<body>
    <center>
        <span style="color: red;">
        <?php 
    $output = "";
    echo $output 
    ?>
    </span>
</center>
    <div class="container" style="margin-top: 50px; width: 850px;">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>SQL INJECTION PANEL</h3>
                </div>
                 
                <div style="padding: 10px;">
                    <form action="login.php" method="post" autocomplete="off">
                        <label for="email">Email Address</label><br>
                        <input type="text" name="email" placeholder="your username" class="form-control">
                        <br>
                        <br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" placeholder="your password" class="form-control">

                        <br><br>
                        <input type="submit" value="Login" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>   
        </div>
    </div>
</body>
</html>