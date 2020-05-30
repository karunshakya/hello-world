<?php
echo "Hello World";

if($_GET['name']){
  echo "<br>";
  echo "Hello ".$_GET['name'];
}

echo $_GET['address'] ? $_GET['address'] : '';
