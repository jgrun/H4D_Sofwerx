/*<?php
if(array_key_exists('check_submit', $_POST)) {
  $filename = "answers.txt";
  $flags = FILE_APPEND | LOCK_EX;
  $input = $_POST['firstname'] . ", " . $_POST['lastname'];
  file_put_contents($filename, $input, $flags);
}
else {
  echo "Mistakes were made";
}
?> */
<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?> <br>
Your last name is <? echo $POST["lastname"]; ?> <br>

</body>
</html>
