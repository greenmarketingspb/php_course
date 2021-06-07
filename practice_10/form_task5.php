<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else $name = "";

echo <<<_END

<html>
  <head>
    <title>Fifth task</title>
  </head>
    <body>
      <form method="post" action="form_task5.php">
      Имя <input type="text" name="name" value='$name'>
      <input type="submit">
      </form>
    </body>
</html>
_END;

?>