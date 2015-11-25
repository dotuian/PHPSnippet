<?php
function  sushu($n){
    $result=[];
    for($i=2;$i<=$n;$i++ ){
        $f=true;
        
        $limit = intval(pow($i, 0.5) + 1);
        #printf("\n".' %s -> %s -> %s ',$i, pow($i, 0.5), $limit);
        
        for ($j=2; $j<= $limit; $j++){
            if ($i % $j == 0){
                $f = false;
                break;
            }
        }
        
        if ($f){
            $result[]=$i;
        }
    }
    
    #print_r($result);
    return $result;
}

$start=microtime(true);
$result=sushu(10000);
echo  "time is " . microtime(true)-$start;
?>