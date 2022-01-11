<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      // Question One
       echo "Q1";
       echo "<br/>";
        $year="2013";
        $day_num=365;
        if($day_num==366){
            echo "leap year";
        }
        else{
            echo "not a leap year";
        }
       echo "<br/>";
       echo "<hr/>";
       // Question Two
       echo "Q2";
       echo "<br/>";
       $temprature=17;
       if($temprature<20){
           echo "it is winter time";
       }
       else{
        echo "it is summer time";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Three
       echo "Q3";
       echo "<br/>";
       $val1=2;
       $val2=2;
       if($val1==$val2){
           echo ($val1+$val2)*3;
       }
       else{
           echo $val1+$val2;
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Four
       echo "Q4";
       echo "<br/>";
       $num1=10;
       $num2=10;
       if($num1+$num2==30){
           echo $num1+$num2;
       }
       else {
        echo "false";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Five
       echo "Q5";
       echo "<br/>";
       $num_mul3=30;
       if($num_mul3 % 3==0 || $num_mul3 % 7==0 ){
           echo "true";
       }
       else{
           echo "false";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Six
       echo "Q6";
       echo "<br/>";
       $betw=50;
       if($betw >= 20 && $betw <= 50){
           echo "true";
       }
       else{
           echo "false";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Seven
       echo "Q7";
       echo "<br/>";
       $n1=1;
       $n2=5;
       $n3=9;
       if($n1>$n2 && $n1>$n3){
               echo "the biggest number"." ".$n1;
       }
       else if($n2>$n1 && $n2>$n3){
            echo "the biggest number"." ".$n2;
       }
       else {
        echo "the biggest number"." ".$n3;
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Eight
       echo "Q8";
       echo "<br/>";
       function electricity_bill($unit){

           $unit_cost_first = 2.50;
           $unit_cost_second = 5.00;
           $unit_cost_third = 6.20;
           $unit_cost_fourth = 7.50;
           if($unit >=50 && $unit<100){
               echo "Electricity Bill :".' '.$unit_cost_first."JOD/Unit";
           }
           else if($unit >=100 && $unit<=200){
            echo "Electricity Bill :".' '.$unit_cost_second."JOD/Unit";
        }
        else if($unit >=201 && $unit<=250){
            echo "Electricity Bill :".' '.$unit_cost_third."JOD/Unit";
        }
        else if($unit >250){
            echo "Electricity Bill :".' '.$unit_cost_fourth."JOD/Unit";
        }
           
       }
       electricity_bill(220);
       echo "<br/>";
       echo "<hr/>";
       // Question Nine
       echo "Q9";
       echo "<br/>";
       $operation="Multiplication";
       $no1=3;
       $no2=4;
       switch($operation){
           case "Summation":
            echo "Summation Result :"." ".$no1+$no2;
            break;
            case "Subtraction":
                echo "Subtraction Result :"." ".$no1-$no2;
                break;
             case "Division":
                echo "Division Result :"." ".$no1/$no2;
                break;
             case "Multiplication":
                 echo "Multiplication Result :"." ".$no1*$no2;
                  break;
            default:
            echo "You Did Not Pick Any Operation!!";
            
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Ten
       echo "Q10";
       echo "<br/>";
       $age=12;
       if($age<18){
           echo "is no eligable to vote";
       }
       else {
        echo "eligable to vote";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Eleven
       echo "Q11";
       echo "<br/>";
       $num_pn=-9;
       if($num_pn<0){
           echo "Negative Number";
       }
       else if($num_pn>0){
        echo "Positive Number";
       }
       else{
        echo "Zero";
       }
       echo "<br/>";
       echo "<hr/>";
       // Question Tweleve
       echo "Q12";
       echo "<br/>";
       $marks=[60,86,95,63,55,74,62,50];
       $sum=0;
       for($i=0;$i<count($marks);$i++){
           $sum+=$marks[$i];
       }
       $avg=$sum / count($marks);
       if($avg<60){
           echo "Grade F";
       }
       else  if($avg<70){
        echo "Grade D";
    }
    else  if($avg<80){
        echo "Grade C";
    }
    else  if($avg<90){
        echo "Grade B";
    }
    else  if($avg<100){
        echo "Grade A";
    }
       
    ?>
</body>
</html>