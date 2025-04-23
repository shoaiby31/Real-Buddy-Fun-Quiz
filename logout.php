<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>  
  <?php

    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
// Finally, destroy the session.
    session_destroy();
    $okmsg=base64_encode("Logout Sucessful");
    header("Location:index.php?okmsg=$okmsg");
  ?>

</body>
</html>