<?php

if (isset($_POST['name']) && isset($_POST['mes'])) {
    $name = $_POST['name'];
    $mes = $_POST['mes'];
} else {
    $name = "";
    $mes = "";
}

echo <<<_END

<html>
  <head>
    <title>Sixth task</title>
  </head>
    <body>
      <form method="post" action="form_task6.php"><pre>
      What is your name? <input type="text" name="name" value='$name'>
      Write the message  <textarea name="mes" cols="20" rows="2" wrap="off">
      $mes
      </textarea>
            <input type="submit">
      </pre></form>
    </body>
</html>
_END;

?>