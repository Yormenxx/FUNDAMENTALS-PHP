<?php 
/*

    integers 0-0 = false
    floats 0-0.0 = false
    ""=false
    [] = false
    null = false

*/
$iscomplete = true;
echo var_dump($iscomplete);
if($iscomplete){
    echo "succes";
}else{
    echo "fail";
}


?>