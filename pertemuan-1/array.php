<?php

// array indexing
$animals = ['Kambing','Kucing','Sapi'];

// mengakses array indexing
#echo $animals[0];
#echo "<br>" . $animals[1];
#echo "<br>" . $animals[1];

foreach($animals as $animal){
    echo $animal . '<br>';
}