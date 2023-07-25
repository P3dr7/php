<?php

    // $ts = strtotime("2005/07/27");
    $ts = strtotime("now");
    echo $ts;
    echo "<br>";
    echo date("l, d/m/Y", $ts);
    $ts = strtotime("+1 day");
    echo $ts;
    echo "<br>";
    echo date("l, d/m/Y", $ts);
    $ts = strtotime("+1 week");
    echo $ts;
    echo "<br>";
    echo date("l, d/m/Y", $ts);

?>