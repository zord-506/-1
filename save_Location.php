<?php

$my_file = fopen("Location.txt" , "w");
$information = "lat:" . $_GET["lat"] . "\nlong:" . $_GET["long"];
fwrite($_myfile, $information);
fclose($_myfile);


?>