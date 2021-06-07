<?php

$login = 13;
$pass = 13;

if (isset($_POST['log']) && isset($_POST['password'])) {
  $log = (int) $_POST['log'];
  $password = (int) $_POST['password'];
  if ($login === $log && $pass === $password) {
    echo 'Доступ разрешен!';
} else {
echo 'Доступ запрещен!';
}

}

 


echo <<<_END

<html>
  <head>
    <title>Fourth task</title>
  </head>
    <body>
      <form method="post" action="form_task4.php"><pre>
      Login <input type="text" name="log" required='required'>
      Password <input type="password" name="password" required='required'>
      <input type="submit">
      </pre></form>
    </body>
</html>
_END;





?>