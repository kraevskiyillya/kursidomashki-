<?php

for ($i = 1; $i <= 18; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "FB";
  } else if ($i % 3 === 0) {
    echo "F";
  } else if ($i % 5 === 0) {
    echo "B";
  } else {
    echo $i;
  }
} 