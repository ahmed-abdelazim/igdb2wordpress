<?php
$i = 1;
$pquery = '';
while ($i=300){

    $pquery .= ','.$i;
    $i++;
}
echo $pquery;
get_response ('platforms',$pquery);
?>