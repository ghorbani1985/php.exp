<?php
if ($mysqli -> query($sql)) {
      echo "Table successfully created!" .PHP_EOL;
  } else {
      echo "Table is not created!" .PHP_EOL;
  }