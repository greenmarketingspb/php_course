<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else $name = "(Не введено)";

echo <<<_END

<html>
  <head>
    <title>First task</title>
  </head>
    <body>
      Привет $name<br>
      <form method="post" action="form_task.php">
      Как вас зовут?
      <input type="text" name="name">
      <input type="submit">
      </form>
    </body>
</html>
_END;

?>