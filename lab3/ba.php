<?php 

 $say =function ($name){
    echo "hello ".$name ;
 };
 $say("work");
function myCaller($myCallback){
    echo $myCallback();
}
myCaller(function(){echo " hello";});
    $a=array(1,2,3,4,5);
    $b= array_map(function($n){
        return $n * $n * $n;
    }, $a);
    print_r($b);
    echo "<br/>"; 
    // bai 2
    function coutToFive()
    {
        yield 1;
        yield from[2,3,4];
        yield 5;
    }
    foreach(coutToFive() as $v)
    //bai4
    echo $v;
    $str= "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the 
    world so high,\nLike a diamond in the sky.";
    $c = explode("\n",$str);
    echo "<pre>";  
    var_dump($c)  

?>