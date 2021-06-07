<?php

if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['mes'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $mes = $_POST['mes'];
}
    


echo <<<_END

<html>
  <head>
    <title>Second task</title>
  </head>
    <body>
      Hello $name<br>
      <br>
      Your age is $age<br>
      <br>
      Your message is $mes<br>
      <br>
      <form method="post" action="form_task2.php"><pre>
      What is your name? <input type="text" name="name">
      How old are you? <input type="text" name="age">
      Write the message <textarea name="mes" cols="20" rows="2" wrap="hard">
      </textarea>
      <input type="submit">
      </pre></form>
    </body>
</html>
_END;



?>
