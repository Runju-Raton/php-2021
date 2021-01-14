<?php
//check even or not
function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}
//factorial
function fact($n){
    $result=1;
    if(gettype($n)!="integer"){
        return "Invalid";
    }
    for($i=$n;$i>1;$i--){
        $result*=$i;
    }
    return $result;

   
}
// function
function serve($foodType="Coffee", $numberofItems="1 cup"){
    echo "$numberofItems"." of ".$foodType. " has\have been served";
}
?>