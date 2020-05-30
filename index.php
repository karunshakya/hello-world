<?php
echo "Hello World";

if($_GET['name']){
  echo "<br>";
  echo "Hello ".$_GET['name'];
}

echo $_GET['address'] ? $_GET['address'] : '';

// undefined function to trigger error
reset();

#never use this as a comment
