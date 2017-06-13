<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      <link rel="stylesheet" href="../templates/admin/css/style.css">
</head>

<body>
  <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form method="POST" action="function/login.php" class="login-container">
    <p><input type="username" name="username" placeholder="Username or Email"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" name="submit" value="Đăng Nhập"></p>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
