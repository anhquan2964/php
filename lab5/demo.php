<?php
    $kq='';
    $arrloi=[];
    $ok =true;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $pheptinh=$_POST['pheptinh'];

        if(empty($so1)){
            $arrloi['so1']='mời bạn nhập ô số 1';
            $ok=false;
        }elseif(!is_numeric($so1)){
            $arrloi['so1']='mời bạn nhập lại kiểu number';
            $ok =false;
        }else{
            $arrloi['so1']='';
            $ok=true;
        }

        if(empty($so2)){
        $arrloi['so2']='mơi bạn nhập ô số 2';
            $ok =false;
        }elseif(!is_numeric($so2)){
            $arrloi['so2']='mời bạn nhập lại kiểu number';
            $ok =false;
        }else{
            $arrloi['so2']='';
            $ok=true;
        }

        if(empty($pheptinh)){
            $arrloi['so3']='mời bạn nhập phép tính';
            $ok=false;
        }elseif($pheptinh != "+" && $pheptinh != "-" &&$pheptinh != "*" &&$pheptinh != "/"){
            $arrloi['so3']='mời bạn nhập đúng phép tính';
            $ok=false;
        }elseif(!is_numeric($so1) || !is_numeric($so2)){
            $arrloi['so3']='mời bạn nhập kiểu số';
            $ok=false;
        } else{
            $arrloi['so3']='';
            $ok=true;
        }
        
        if($ok==true){
        if($pheptinh === '+'){
            $kq= sum($so1,$so2);
            echo $kq;
        }elseif($pheptinh === '-'){
            $kq= hieu($so1,$so2);
            echo $kq;
        }elseif($pheptinh === '*'){
            $kq= tich($so1,$so2);
            echo $kq;
        }else{
            $kq= thuong($so1,$so2);
            echo $kq;
        }
       
    }
       
    }
    function sum($a,$b){
        return $a+$b;
    }
    function hieu($a,$b){
        return $a-$b;
    }
    function tich($a,$b){
        return $a*$b;
    }
    function thuong($a,$b){
        return $a/$b;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>" method="POST">
    <lable>Số1</lable><br>
    <input type="text" name="so1"><span><?php isset($arrloi['so1']) ? print $arrloi['so1'] : print''; ?></span><br>
    <lable>Số2</lable><br>
    <input type="text" name="so2"><span><?php isset($arrloi['so2']) ? print $arrloi['so2'] : print''; ?><br>
    <label for="">Phép tính</label><br>
    <input type="text" name="pheptinh"><?php isset($arrloi['so3']) ? print $arrloi['so3'] : print''; ?><br>
    <input type="submit" value="tinh" name="tinh">
    </form>
</body>
</html>