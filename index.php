<html>
  <head>
    <title>PHP Test COOKIE</title>
  </head>
  <body>
   <?php
    setcookie("cookie", "Dan", time() - 86400); // cookie parameters, including name and its value, and a set time for it to expire in the browser.
    $_SESSION['cookie'] = "14"; // the cookie is being stored in the server in the 14th line.
   ?>
  </body>
</html>
