<?php


  $i = 0;

  function foo($name = "david"){
    global $i;

    $i = $i + 1;

    print $i . " - ";


    if ($i < 100) {
      foo();
    }




  }
