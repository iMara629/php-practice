<html>

<head>
<title>hi</title>
</head>

<body>
        <?php require_once('partials/nav.php') ?>
     <link href="assets/style.css" rel="stylesheet">
    <h2>Profiles</h2>
    <div id="signup">
<form method="get" action="extras/process.php">

    <div class="container">
      <h2>Sign Up</h2>
        
    <label for="email"><b>Full Name:</b></label><br>
      <input type="text" placeholder="John A Doe" name="fn" required>
        <br>
      <label for="email"><b>Email:</b></label><br>
      <input type="text" placeholder="JohnADoe@email.com" name="em" required>
<br>
     <label for="username"><b>Username:</b></label><br>
      <input type="text" placeholder="Username" name="un" required>
<br>
      <label for="psw"><b>Password:</b></label><br>
      <input type="password" placeholder="Password" name="pw" required>
<br>
      <label for="psw-repeat"><b>Repeat Password:</b></label><br>
      <input type="password" placeholder="Repeat Password" name="pwr" required>
<br>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
<br>
           <input type="submit" value="Sign Up">
      </div>
  </form>
</div>
                <?php require_once('partials/footer.php') ?>

        </body>
</html>
 
