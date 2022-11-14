<?php
for($i = 1; $i <= 100; $i++){
    echo " $i";
}

for($i = 1; $i <= 100; $i++){
    for($n = 1; $n <= 100; $n++){
        $total = ($i * $n);
        echo " $total";
    }
}

?>
