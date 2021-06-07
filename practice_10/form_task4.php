<?php

if (isset($_POST['log']) && isset($_POST['password'])) {
  $log = $_POST['log'];
  $password = $_POST['password'];
}
 
$login = 13;
$pass = 13;

if ($login === $log && $pass === $password) {
    echo 'Доступ разрешен!';
} else echo 'Доступ запрещен!';


echo <<<_END

<html>
  <head>
    <title>Fourth task</title>
  </head>
    <body>
      <form method="post" action="form_task4.php"><pre>
      Login <input type="text" name="log" required='required'>
      Password <input type="text" name="password" required='required'>
      <input type="submit">
      </pre></form>
    </body>
</html>
_END;

$login = 13;
$pass = 13;

if ($login === $log && $pass === $password) {
    echo 'Доступ разрешен!';
} else echo 'Доступ запрещен!';


?>