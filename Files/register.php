<?php include('server.php') ?>
<html>
<head>
<title>Sample Registration form</title>
<link rel="stylesheet"type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Register</h2>
</div>
<form method="post"action="register.php">
<?php include('errors.php');?>

<div class="input-group">
<label>username</label>
<input type="text" name="username"value="<?php echo $username; ?>">
</div>

<div class="input-group">
<label>email</label>
<input type="email" name="email"value="<?php echo $email; ?>">
</div>

<div class="input-group">
<label>password</label>
<input type="password"name="password_1">
</div>

<div class="input-group">
<label>Confirm password</label>
<input type="password"name="password_2">
</div>
<div class ="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>
<p>Already have an account?<a href="login.php">sign in</a>
</p>
</form>
</body>
</html>
