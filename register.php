<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>login page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <script src='main.js'></script>
   
</head>
<body>


    <div class="container"></div>
        <div class="row"></div>
        <div class="col-md-6">
            <h3> REGISTER PAGE </h3>
<form action="logindb.php" method="post">

<div class= "form-group">
    <label>username</label>
    <input type="text" name="name" class="form-control" required>
</div>

<div class= "form-group">
    <label>password</label>
    <input type="text" name="password" class="form-control" required>
</div>

<div class= "form-group">
    <label>re password</label>
    <input type="text" name="repassword" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary"> REGISTER</button> 

</form>
</body>
</html>