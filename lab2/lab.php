<?php
    //bai1
    $color=array('red','green','white');
    print_r ($color);
    echo"<br/>";
    echo $color[0];
    echo"<br/>";

    $age=array();
    $age[0]=10;
    $age[1]=20;
    $age[3]=30;
    print_r($age);
    echo "<br/>";
    
    
    //bai2
        $salaries=array(
            "mohammad"=>2000,
            "qadir"=>1000,
            "zara"=>500);
        echo "salary of mohammad is".$salaries['mohammad']."<br/>";
        echo  "salary of qadir is".$salaries['qadir']." <br/>";
        echo  "salary of zara is".$salaries['zara']."<br/>";

    //bai3
        define('LOCATOR',"/locator");
        define('CLASSES', LOCATOR."/code/classes");
        define('FUNCTION', LOCATOR."/code/function");
        define('USERDIR', LOCATOR."user");

        //phan2
        //bai1
    $age =50;

    if($age<30){
        echo "your age is less than 30";
    }elseif($age>30 && $age <40){
        echo "your age is brtween 30 and 40";
    }elseif($age>40 && $age <50){
        echo "your age is brtween 40 and 50";
    }else{
       echo"your age is greater than 50"."<br/>";
    }

    //bai2
    $max=0;
    echo $i=0;
    echo ",";
    echo $j=1;
    echo ",";
    $result=0;
    while($max<10){
        $result=$i +$j;
        $i =$j;
        $j =$result;
        $max =$max+1;
        echo $result;
        echo ",";
    }
    echo "<br/>";
    //bai3
    $fruits =array('apple','banana','orange','grapes');
    foreach($fruits as $fruit){
        echo $fruit;
        echo "<br/>";
    }
    $employee =array('name'=>'john smith','age'=>30,'profession'=> 'developer' );
    foreach($employee as $key => $value){
        echo sprintf("%s: %s<br/>",$key,$value);
        echo "<br/>";
    }
    //bai4
    echo 'simple break '.'<br/>'; 
    for($i=1;$i<=2;$i++){
        echo "\n".'$i='.$i. ' ';
        for($j=1;$j<=5;$j++){
            if($j==2){
                break;
            }
            echo '$j='.$j.' ';
        }
    }
    echo "<br/>";

    echo 'multi-level break';
    for($i=1;$i<=2;$i++){
        echo "\n".'$i='.$i. ' ';
        for($j=1;$j<=5;$j++){
            if($j==2){
                break 2;
            }
            echo '$j='.$j.' ';
        }
    }
?>
