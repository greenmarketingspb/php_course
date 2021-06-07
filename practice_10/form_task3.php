<?php

if (isset($_POST['age'])) {
    $age = $_POST['age'];
} else $age = "(Не введено)";

echo <<<_END

<html>
  <head>
    <title>Third task</title>
  </head>
    <body>
      You are $age years old<br>
      <form method="post" action="form_task3.php">
      How old are you?
      <input type="text" name="age">
      <input type="submit">
      </form>
    </body>
</html>
_END;