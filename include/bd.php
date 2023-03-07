<?php
$connection = mysqli_connect('web_mysql', 'root', 'root', 'teste');
if (!$connection) {
  echo "ops! tente novamente";
}

